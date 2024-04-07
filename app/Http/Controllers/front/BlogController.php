<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\setting;

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
        
        $blog=blog::findOrFail($id);
        $setting=setting::all()->toArray();
        $blogs=blog::all();

        return view('front.medical_article',compact(['blog','setting','blogs']));
    }
}
