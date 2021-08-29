<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Error;
use App\Models\Menu;
use Illuminate\Http\Request;

class OsnovniController extends Controller
{
    protected $data;
    protected $activityLogger;
    protected $errorLogger;

    public function __construct(){
        $this->data["menu"]=Menu::getMenu();
        //$this->data["parentsMenu"]=Menu::whereNull("parent_id")->get();
        $this->data["categories"]=Category::all();

        $this->activityLogger = new Activity();
        $this->errorLogger = new Error();

    }
}
