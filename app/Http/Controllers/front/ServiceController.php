<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;


class ServiceController extends Controller
{
    public function index()
    {
        
        $services=service::all();
        return view('front.service',compact('services'));
    }
    public function show(Request $request,$id)
    {
        
        $service=service::findOrFail($id);
        $setting=setting::all()->toArray();
        $services=service::all();

        return view('front.services_details',compact(['services','setting','service']));
    }
}
