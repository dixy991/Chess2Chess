<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ["text","post_id","user_id"];

    public function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function posts(){
        return $this->belongsTo(Post::class,"post_id","id");
    }
}
