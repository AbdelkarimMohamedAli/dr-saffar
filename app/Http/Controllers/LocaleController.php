<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    //
    public function setLocale($locale)
    {
        // Validate the locale to prevent arbitrary values
        $supportedLocales = ['en', 'ar']; // Add more locales as needed
        if (!in_array($locale, $supportedLocales)) {
            abort(404);
        }

        // Set the locale in the session
        session()->put('locale', $locale);


        return redirect()->back(); // Redirect back to the previous page
    }

}
