<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data["users"] = \DB::table("users")->join("roles","role_id","=","roles.id")->get(["users.*","roles.name","roles.id as role"]);
//        dd($this->data["users"]);
        return view("pages.admin.users.index",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["roles"] = \DB::table("roles")->get();
        $this->data["route"]= "users.index";
        $this->data["page"]= "pages.admin.users.form";
        $this->data["action"]= "store";
        return view("pages.admin.layouts.createdit",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        try {
            $user = User::create($request->except("password") +
                ["password" => Hash::make($request->password)]);

            $this->activityLogger->log("Successfully added new user: " . $user->id);

            return redirect()->route("users.index")->with("success", "You are now successfully registered!");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while adding new user: " . $exception->getMessage());
            \Log::error("Error while adding new user: " . $exception->getMessage());
            return redirect()->route("users.index")->with("error", $exception->getMessage());
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
    public function edit(User $user)
    {
        $this->data["user"] = $user;
        $this->data["roles"] = \DB::table("roles")->get();
        $this->data["route"]= "users.index";
        $this->data["page"]= "pages.admin.users.form";
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
    public function update(UserEditRequest $request, User $user)
    {
        $id = $user->id;
        if($user->email != $request->email){
            $request->validate([
                "email" => "bail|required|email|unique:users" ,
            ]);
//            dd($request->all());
        }

        try {
            $user->update($request->all());
            $user->save();

            $this->activityLogger->log("Successfully updated user: " . $id);

            return redirect()->route("users.index")->with("success", "You are now successfully izmenjen!");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while updating user: " .$id .":" . $exception->getMessage());
            \Log::error("Error while updating user " .$id .":" . $exception->getMessage());
            return redirect()->route("users.index")->with("error", $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $id = $user->id;
        try{
            $user->delete();

            $this->activityLogger->log("Successfully deleted user: " . $id);

            return redirect()->route("users.index")->with("success","uspeh");
        }
        catch (\Exception $exception){
            $this->errorLogger->log("Error while deleting user: ".$id .":" . $exception->getMessage());
            \Log::error("Error while deleting user " .$id .":" . $exception->getMessage());
            return redirect()->route("users.index")->with("error",$exception->getMessage());
        }
    }
}
