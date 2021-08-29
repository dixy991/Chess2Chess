<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $names = ["quizzes","interviews","tactics","funny","memes"];

    public function run()
    {
        for($i=0;$i<count($this->names);$i++){
            \DB::table("categories")->insert([
                "name"=>$this->names[$i]
            ]);
        }
    }

}
