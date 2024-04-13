<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class LocaleController extends Controller
{
    //
    public function setLocale(Request $request,$locale)
    {
        
        // $request->session()->put('locale', $locale);
        // $response = new Response('locale');

        // $response->cookie('locale', $locale);

        // $cookie = cookie('locale', $locale, '120');


        Cookie::queue(Cookie::make('locale', $locale, 30));


        return redirect()->back(); // Redirect back to the previous page
    }

}
