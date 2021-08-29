<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name","thumbnail","related_table"];
    public $timestamps = false;

    public function posts(){
        return $this->hasMany(Post::class,"category_id","id");
    }

    public function images(){
        return $this->hasMany(Image::class,"category_id","id");
    }
}
