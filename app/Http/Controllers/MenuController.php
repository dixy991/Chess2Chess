<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.admin.menu.index",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["route"]= "menu.index";
        $this->data["page"]= "pages.admin.menu.form";
        $this->data["action"]= "store";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
//        dd($request->all());  BAG!!! da se ispisu i deca dece
        try{
            Menu::create($request->all());

            return redirect()->route("menu.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("menu.index")->with("error",$exception->getMessage());
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
    public function edit(Menu $menu)
    {
        $this->data["m"] = $menu;
        $this->data["route"]= "menu.index";
        $this->data["page"]= "pages.admin.menu.form";
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
    public function update(MenuRequest $request, Menu $menu)
    {
        try{
            if(is_null($request->parent_id))
                $request->parent_id = 0;
            $menu->update($request->all());
            $menu->save();

            return redirect()->route("menu.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("menu.index")->with("error",$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        try{
            $menu->delete();
            return redirect()->route("menu.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("menu.index")->with("error",$exception->getMessage());
        }
    }
}
