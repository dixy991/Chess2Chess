<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ["name","route","parent_id","order"];
    public $timestamps = false;

    public static function getMenu(){
        $menus = Menu::orderBy("order")->get();

        foreach ($menus as $menu){
            $menu->submenu = Menu::where("parent_id","=",$menu->id)->get();
        }

        return $menus;
    }

    public function childs(){
        return $this->hasMany(Menu::class,"parent_id","id")->orderBy("order");
    }
}
