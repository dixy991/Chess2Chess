<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.admin.categories.index",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["route"]= "categories.index";
        $this->data["page"]= "pages.admin.categories.form";
        $this->data["action"]= "store";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try{
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/img/'), $imageName);

            $category = Category::create($request->except("image") + ["thumbnail" => $imageName]);
//izbaci ovo
            $this->activityLogger->log("Successfully added new category: " . $category->id);

            return redirect()->route("categories.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while adding new category: " . $exception->getMessage());
            \Log::error("Error while adding new category: " . $exception->getMessage());
            return redirect()->route("categories.index")->with("error",$exception->getMessage());
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
    public function edit(Category $category)
    {
        $this->data["category"] = $category;
        $this->data["route"]= "categories.index";
        $this->data["page"]= "pages.admin.categories.form";
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
    public function update(CategoryRequest $request, Category $category)
    {
        $category_id = $category->id;
        try{
            $category->update($request->except("image"));

            if ($request->image) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('assets/img/'), $imageName);
                $category->thumbnail = $imageName;
            }

            $category->save();

            $this->activityLogger->log("Successfully updated category: " . $category_id);

            return redirect()->route("categories.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while updating category: " .$category_id .":" . $exception->getMessage());
            \Log::error("Error while updating category" .$category_id .":" . $exception->getMessage());
            return redirect()->route("categories.index")->with("error",$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category_id = $category->id;
        try{
            $category->delete();

            $this->activityLogger->log("Successfully deleted category: " . $category_id);

            return redirect()->route("categories.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while deleting category: ".$category_id .":" . $exception->getMessage());
            \Log::error("Error while deleting category " .$category_id .":" . $exception->getMessage());
            return redirect()->route("categories.index")->with("error",$exception->getMessage());
        }
    }
}
