<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $names = ["admin","user"];

    public function run()
    {
        foreach ($this->names as $name){
            \DB::table("roles")->insert([
                "name"=> $name
            ]);
        }
    }
}
