<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ToContactAdminMail;
use App\Models\Activity;
use App\Models\Comment;
use App\Models\Error;
use App\Models\Image;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends OsnovniController
{

    public function about(){
        return view("pages.main.about",$this->data);
    }

    public function contact(){
        return view("pages.main.contact",$this->data);
    }

    public function login(){
        return view("pages.main.login",$this->data);
    }

    public function register(){
        return view("pages.main.register",$this->data);
    }

    public function unauthorized(){
        return view("pages.main.401");
    }

    public function author(){
        return view("pages.main.author",$this->data);
    }

    public function dateFilter(Request $request){

        if($request->aktivnosti=="true"){
            $activities = Activity::getActivities($request->dateFrom,$request->dateTo);
            return response()->json($activities);
        }
        //ista linija koda
        else{
            $errors = Error::getErrors($request->dateFrom,$request->dateTo);
            return response()->json($errors);
        }
    }

    public function search(Request $request){
        $unos = "%" . trim($request->uneto) . "%";

        if(!isset($request->category_id)) {
            if($request->slike){
                $categories = $request->categories;
                $images = Image::with("categories")->whereNotNull("category_id")->whereIn("category_id",$categories)->paginate(5);
                return response()->json($images);
            }
            else{
                $categories = $request->categories;
                $posts = Post::with("categories")->withCount("comments")->whereIn("category_id",$categories)->where(function ($query) use ($unos,$categories){
                    $query->where("posts.title","like", $unos)->orWhere("posts.text","like",$unos);
                })->paginate(15);//ovo nam radi
        //bakci se sovim
            }

            return response()->json($posts); //duplikat vis
        }

        $posts = Post::where("category_id","=",$request->category_id)->where(function ($query) use ($unos){
            $query->where("title","like", $unos)->orWhere("text","like",$unos);
        })->paginate(6);

        return response()->json($posts);
    }

//    public function show(Page $slug)
//    {
//        return view('pages.main.' . $slug->view, compact('page'));
//    }
}
