<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    //
    public function setLocale(Request $request,$locale)
    {
        
         $request->session()->put('locale', $locale);
        // $request->session()->put(['locale'=>$locale]);




        return redirect()->back(); // Redirect back to the previous page
    }

}
