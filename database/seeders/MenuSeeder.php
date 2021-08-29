<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $names = ["Home","Chess articles","Chess quizzes","Chess interviews","Chess tactics","Funny chess","Chess memes",
        "About","Contact","User","Log in","Register","Logout"];
    protected $routes = ["home","articles","quizzes","interviews","tactics","funny","memes","about","contact","#","login",
        "register","logout"];
    //q,i,t -> 2
    //l,r,l -> user

    public function run()
    {
        for($i=0;$i<count($this->names);$i++){
            \DB::table("menus")->insert([
                "name"=>$this->names[$i],
                "route"=>$this->routes[$i],
                "order"=>$i
            ]);
        }
    }
}
