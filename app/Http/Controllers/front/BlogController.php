<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\menu;
use App\Models\setting;
use App\Models\blog;
use App\Models\slider;
use App\Models\banner_section;
use App\Models\whychooseus;
use App\Models\doctor_section;
use App\Models\Contact;

class BlogController extends Controller
{
    //
    public function index()
    {
        
        $blogs=blog::all();
        return view('front.blog',compact('blogs'));
    }
    public function show(Request $request,$id)
    {
        $settings=setting::all()->toArray();
        // if(!empty($settings)){
        //     dd('aha');
        // }
        //   dd( $settings);
        ;
        $menus=menu::all();
        $sliders=slider::all();
        $banner_section=banner_section::all()->toArray();
        $whychooseus=whychooseus::all()->toArray();
        $doctor_section=doctor_section::all()->toArray();
        $blog=blog::findOrFail($id);
        $setting=setting::all()->toArray();
        $blogs=blog::all();

        return view('front.medical_article',compact(['blog','setting','blogs','settings','menus','sliders','banner_section','whychooseus','doctor_section']));
    }
}
