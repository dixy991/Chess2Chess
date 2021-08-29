<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["img_src","img_alt","category_id"];
    public $timestamps = false;

    public function categories(){
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function posts(){
        return $this->belongsTo(Post::class,"post_id","id");
    }
}
