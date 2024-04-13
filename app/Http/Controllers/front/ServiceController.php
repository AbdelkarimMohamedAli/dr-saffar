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


class ServiceController extends Controller
{
    public function index()
    {
        
        $services=service::all();
        return view('front.service',compact('services'));
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
        $blogs=blog::all();
        $sliders=slider::all();
        $banner_section=banner_section::all()->toArray();
        $whychooseus=whychooseus::all()->toArray();
        $doctor_section=doctor_section::all()->toArray();

        
        // $value = $request->session()->put('key', 'value');
        session()->put('locale', 'en');
        
        $service=service::findOrFail($id);
        $services=service::all();

        return view('front.services_details',compact(['services','service','blogs','settings','menus','sliders','banner_section','whychooseus','doctor_section']));
    }
}
