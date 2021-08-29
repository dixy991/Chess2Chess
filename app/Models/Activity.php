<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ["activity","ip_address","date","user_id"];

    public static function getActivities($dateFrom = null, $dateTo = null){
        $activity = Activity::with("users:id,email");
        if($dateFrom == null && $dateTo == null){
            return $activity->latest("date")->select("activities.*")->paginate(25); //bi ovo radilo zapravo?bukvalno je vise linija koda...
        }
        elseif($dateFrom == null){
            return $activity->where("date","<",$dateTo)->latest("date")->paginate(15);
        }
        elseif($dateTo == null){
            return $activity->where("date",">",$dateFrom)->latest("date")->paginate(20);
        }
        else{
            return $activity->whereBetween("date",[$dateFrom,$dateTo])->latest("date")->paginate(10);
        }
    }

    public function log($activity){
        $user_id = session()->has("user") ? session()->get("user")->id : null;
        $ip = \Request::ip();
        $date = Carbon::now()->format("Y-m-d");
        Activity::create(["activity"=>$activity,"ip_address"=>$ip,"date"=>$date,"user_id"=>$user_id]);
    }

    public function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
