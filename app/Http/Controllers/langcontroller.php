<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class langcontroller extends Controller
{
    //
    public function lang($locale)
    {
         //dd($locale);
        // You may also change the active language at runtime using the setLocale method on the App facade
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
