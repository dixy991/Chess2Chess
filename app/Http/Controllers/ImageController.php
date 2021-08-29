<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery(){
        $putanja = \Request::route()->getName();
        $category = Category::where("name","=", $putanja)->select("id","name")->first();
        $this->data["images"] = Image::where("category_id","=",$category->id)->get();
//            dd($this->data["images"]);
        return view("pages.posts.memes",$this->data);
    }


    public function index()
    {
        $this->data["categories"]=Category::where("related_table","=","images")->get();
//            dd($this->data);
        $this->data["images"] = Image::with("categories")->whereNotNull("category_id")->paginate(5);
//        dd($this->data);
        return view("pages.admin.images.index",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["categories"]=Category::where("related_table","=","images")->get();
        $this->data["route"]= "images.index";
        $this->data["page"]= "pages.admin.images.form";
        $this->data["action"]= "store";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/img/'), $imageName);

            Image::create($request->except("image") + ["img_src" => $imageName ]);

            return redirect()->route("images.index")->with('success', 'Uspesno dodato!');

        }
        catch (\Exception $exception){
            return redirect()->route("images.index")->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $this->data["image"] = $image;
        $this->data["categories"]=Category::where("related_table","=","images")->get();
        $this->data["route"]= "images.index";
        $this->data["page"]= "pages.admin.images.form";
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
    public function update(Request $request, Image $image)
    {
        try {
            $image->update($request->except("image"));

            if ($request->image) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('assets/img/'), $imageName);
                $image->img_src = $imageName;
            }

            $image->save();

            return redirect()->route("images.index")->with('success', 'Uspesno izmenjeno!');
        }
        catch (Exception $exception){
            return redirect()->route("images.index")->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Image $image)
    {
        try{
            $image->delete();
            if($request->ajax()){
                return response()->json(["uspeh" => "da"]);
            }

            return redirect()->route("images.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("images.index")->with("error",$exception->getMessage());
        }
    }
}
