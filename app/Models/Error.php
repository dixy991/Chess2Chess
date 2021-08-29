<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;

    protected $fillable = ["message","date"];

    public static function getErrors($dateFrom = null, $dateTo = null){
        if($dateFrom == null && $dateTo == null){
            return Error::latest("date")->paginate(1); //bi ovo radilo zapravo?bukvalno je vise linija koda...
        }
        elseif($dateFrom == null){
            return Error::where("date","<",$dateTo)->latest("date")->paginate(1);
        }
        elseif($dateTo == null){
            return Error::where("date",">",$dateFrom)->latest("date")->paginate(1);
        }
        else{
            return Error::whereBetween("date",[$dateFrom,$dateTo])->latest("date")->paginate(1);
        }
    }

    public function log($message){
        $date = Carbon::now()->format("Y-m-d");
        Error::create(["message"=>$message,"date"=>$date]);
    }
}
