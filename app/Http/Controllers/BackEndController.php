<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ToContactAdminMail;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Error;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class BackEndController extends OsnovniController
{
    //comment i role controller?
    public function index(){
        $this->data["activeUsers"] = User::getNumOfActiveUsers();
//        dd($this->data);
        return view("pages.admin.main.home",$this->data);
    }

    public function adminIndex(){
        $this->data["categories"]=Category::where("related_table","=","posts")->get();
//            dd($this->data);
        $this->data["posts"] = Post::withCount("comments")->with("categories")->paginate(15);
        return view("pages.admin.posts.index",$this->data);
    }

    public function adminShow(Post $post){
        $this->data["post"] = Post::withCount("comments")->where("posts.id","=",$post->id)->first();
        $this->data["comments"]=Comment::with("users")->where("post_id","=",$post->id)->get();
        return view("pages.admin.posts.show",$this->data);
    }

    public function registracija(RegisterRequest $request){

        try {
            $user = User::create($request->except("password") +
                ["password" => Hash::make($request->password), "role_id" => 2, "active" => 0]);

            $this->activityLogger->log("Successfully registered new user: " . $user->username);
            session()->put("newRegisteredUser", $user->username);

            return back()->with("success", "You are now successfully registered!");
        }
        catch (\Exception $exception){
            return back()->with("error", "Something wrong with server. Sorry.");
        }
    }

    public function logovanje(LoginRequest $request){

        try {
            $usersEmailCheck = User::where("email","=",$request->email)->first();

            if(!$usersEmailCheck){
                return back()->with("error", "No email found!");
            }
            else{
                if(Hash::check($request->password,$usersEmailCheck->password)){
                    session()->put("user",$usersEmailCheck);

                    $this->activityLogger->log("User: " . $usersEmailCheck->username . " has just logged in");
                    session()->put("latestLoggedInUser",$usersEmailCheck->username);

                    $user = User::find($usersEmailCheck->id);
                    $user->active = 1;
                    $user->save();

                    if(session()->get("latestLoggedOutUser") == $usersEmailCheck->username);
                        session()->pull("latestLoggedOutUser");

                    if(session()->get("user")->role_id==1)
                        return redirect()->route("admin-panel");
                    else
                        return redirect()->route("home")->with("success", "Yeaa!");
                }
                else{
                    return back()->with("error", "Incorrect password!");
                }
            }

        }
        catch (\Exception $exception){
            return back()->with("error", "Something wrong with server. Sorry.");
        }

    }

    public function logout(){
        if(session()->has("user")){
            //upisi aktivnost -- neki lep komentar
            $userid = session()->get("user")->id;
            $username = session()->get("user")->username;
            $this->activityLogger->log("User: " . $username . " has just logged out");
            $user = User::find($userid);
            $user->active = 0;
            $user->save();
            session()->put("latestLoggedOutUser", $username);
//            dd(session()->get("latestLoggedInUser"));
            if(session()->get("latestLoggedInUser") == $username);
                session()->pull("latestLoggedInUser");
            session()->pull("user");
        }
        return redirect()->route("login");
    }

    public function kontaktiranje(ContactRequest $request){
        try {
            $email=[
//                "subject" => "New message from" . $request->name,
//                "name" => $request->name,
//                "email" => $request->email,
//                "content" => $request->message
            ];

            $email = [
                "title" => "Naslovce",
                "body" => "tjelo"
            ];

            $this->activityLogger->log( $request->name . " has just send admin a message.");
            session()->put("newMessage",$request->name);

            $data = $request->message;
            $from = $request->email;

            Mail::to("chess2chess2php2@gmail.com")->send(new ToContactAdminMail($data,$from));

//            Mail::send("partials.displayerrors",$email,function ($message) use($email){
//                $message->to("chess2chess2php2@gmail.com")->subject($email["subject"]);
//            });

            return back()->with("success", "uspeh");

        }
        catch (\Exception $exception){
            return back()->with("error", $exception->getMessage());
        }
    }

    public function komentarisi(Request $request){
//        $request->validate([
//            "text" => "required"
//        ]);

        $validator = \Validator::make($request->all(), [
            'text' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()],422);
        } else {
            try {
                Comment::create($request->all());
                $allComments = Comment::with("users")->where("post_id", "=", $request->post_id)->get();
                $user = User::find($request->user_id);
                $newComm = new \stdClass();
                $newComm->username = $user->username;
                $newComm->post_id = $request->post_id;
                $this->activityLogger->log("User: " . $request->user_id . "has just commented on post: " . $request->post_id);
                session()->put("newestCommentOnPost", $newComm);

                return response()->json($allComments);
            } catch (\Exception $exception) {
                return response()->json();
            }
        }
    }

    public function izmeniKomentar(Request $request){
        $request->validate([
            "text" => "required"
        ]);

        try{
            $comment = Comment::find($request->id);
            $comment->text = trim($request->text);
            $comment->save();
            $allComments = Comment::with("users:id,username")->where("post_id","=",$request->post_id)->get();
            $user = User::find($request->user_id);
            $updatedComm = new \stdClass();
            $updatedComm->username = $user->username;
            $updatedComm->post_id = $request->post_id;
            $this->activityLogger->log("User: " . $request->user_id . "has just updated his comment on post: " .$request->post_id);
            session()->put("updatedCommentOnPost",$updatedComm);
//            foreach ($allComments as $comment){
//                $comment->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('Y-m-d');
//            }//neceeeee

            return response()->json($allComments);
        }
        catch (\Exception $exception){
            return response()->json();
        }
    }

    public function izbrisiKomentar(Comment $comment){
        try{
            $post = Post::where("id","=",$comment->post_id)->first();
            //realno ajaxom
            $comment->delete();
            return redirect()->route("admin-post",$post)->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("admin-post")->with("error",$exception->getMessage());
        }
    }

    public function activities(){
        $this->data["activities"] = Activity::getActivities();
//        dd($this->data);
        return view("pages.admin.main.activities",$this->data);
    }
//izbaci ovo

    public function errors(){
        $this->data["errors"] = Error::getErrors();
//        dd($this->data);
        return view("pages.admin.main.errors",$this->data);
    }
}
