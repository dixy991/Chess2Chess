<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Picture;

class PostController extends FrontEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $putanja = \Request::route()->getName();
        $category = Category::where("name","=", $putanja)->select("id","name")->first();
        $this->data["category"] = $category;
//        dd($putanja,$catid);

            $this->data["posts"] = Post::with("categories")->where("category_id","=",$category->id)->paginate(6);
            return view("pages.posts.index",$this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["categories"]=Category::where("related_table","=","posts")->get();
        $this->data["route"]= "admin-posts";
        $this->data["page"]= "pages.admin.posts.form";
        $this->data["action"]= "store";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/img/'), $imageName);

            $date = Carbon::now()->format("Y-m-d");

            Post::create($request->except("image") + ["thumbnail" => $imageName, "date" => $date]);

            return redirect()->route("admin-posts")->with('success', 'Uspesno dodato!');

        }
        catch (\Exception $exception){
            return redirect()->route("admin-posts")->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Post $post)
    {
        $this->data["post"] = Post::withCount("comments")->where("posts.id","=",$post->id)->first();
        $this->data["comments"]=Comment::with("users")->where("post_id","=",$post->id)->get();

        $putanja = \Request::route()->getName();

//                dd($this->data["comments"]);
        return view("pages.posts.show",$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->data["post"] = $post;
        $this->data["categories"]=Category::where("related_table","=","posts")->get();
        $this->data["route"]= "admin-posts";
        $this->data["page"]= "pages.admin.posts.form";
        $this->data["action"]= "update";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        try {
            $post->update($request->except("image"));

            if ($request->image) {
                $imageName = time() . '.' . $request->image->extension();
                $resizedImage = Picture::make($request->image->getRealPath());
                $resizedImage->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('assets/img/') . $imageName);
//                unlink(public_path("assets/img/" . $post->thumbnail));
                $post->thumbnail = $imageName;
                //lepse skladistiti slike
            }

            $post->save();

            return redirect()->route("admin-posts")->with('success', 'Uspesno izmenjeno!');
        }
        catch (Exception $exception){
            return redirect()->route("admin-posts")->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Post $post)
    {
        try{
            $post->delete();
            if($request->ajax()){
                return response("Success",204);
            }

            return redirect()->route("admin-posts")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("admin-posts")->with("error",$exception->getMessage());
        }
    }
}
