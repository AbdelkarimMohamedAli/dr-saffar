<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\setting;
use App\Models\blog;
use App\Models\slider;
use App\Models\banner_section;
use App\Models\whychooseus;
use App\Models\service;
use App\Models\doctor_section;

class AboutController extends Controller
{
    public function index()
    {

        //
         $settings=setting::all()->toArray();
        // if(!empty($settings)){
        //     dd('aha');
        // }
        //   dd( $settings);
        ;
        $menus=menu::all();
        $blogs=blog::all();
        $sliders=slider::all();
        $banner_section=banner_section::all()->toArray();
        $whychooseus=whychooseus::all()->toArray();
        $services=service::all();
        $doctor_section=doctor_section::all()->toArray();

        
        // $value = $request->session()->put('key', 'value');
        session()->put('locale', 'en');




        return view('front.about',compact(['blogs','settings','menus','sliders','banner_section','whychooseus','services','doctor_section']));
    }
}
