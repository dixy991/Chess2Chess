<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $names = ["chess.png","log.png","conta.png"];

    public function run()
    {
        for($i = 0;$i < 25;$i++){
            \DB::table("images")->insert([
                "img_src"=>$this->names[rand(0,2)],
                "img_alt"=>"opis",
                "post_id"=> rand(null,15),
            ]);
        }
    }
}
