<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends FrontEndController
{
    public function index(Request $request){
        $this->data["posts"]=Post::with("categories")->latest("date")->skip(0)->take(3)->get();

        if($request->ajax()){
            $posts = Post::with("categories")->latest("date")->skip($request->skip)->take(3)->get();
            return response()->json($posts);
        }
//        dd($this->data);

        return view("pages.main.home",$this->data);
    }
}
