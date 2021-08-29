<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data["roles"] = Role::all();
        return view("pages.admin.roles.index",$this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["route"]= "roles.index";
        $this->data["page"]= "pages.admin.roles.form";
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
            Role::create($request->all());

            return redirect()->route("roles.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("roles.index")->with("error",$exception->getMessage());
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
    public function edit(Role $role)
    {
        $this->data["role"] = $role;
        $this->data["route"]= "roles.index";
        $this->data["page"]= "pages.admin.roles.form";
        $this->data["action"]= "update";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *///jer im oboma samo name treba:
    public function update(CategoryRequest $request, Role $role)
    {
        try{
            $role->update($request->all());
            $role->save();

            return redirect()->route("roles.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("roles.index")->with("error",$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        try{
            $role->delete();
            return redirect()->route("roles.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            return redirect()->route("roles.index")->with("error",$exception->getMessage());
        }
    }
}
