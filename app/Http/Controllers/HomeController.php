<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\setting;



class HomeController extends Controller
{
    //
    public function index()
    {
        //
         $settings=setting::all()->toArray();
        //$settings = Setting::all()->pluck('value', 'key')->toArray();
        $menus=menu::all();


        return view('home',compact(['settings','menus']));
    }
}
