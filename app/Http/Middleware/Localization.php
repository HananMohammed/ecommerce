<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(App::setLocale(session()->get('lo')));
        if($request->session()->get('locale')==null){
           $request->session()->put('locale','ar');
           App::setLocale(session()->get('locale'));
          // dd( $request->session());
             //App::setLocale(session()->put('locale','ar'));

        }else if (session()->has('locale')!=null) {
            App::setLocale(session()->get('locale'));

        }
        return $next($request);
    }
}
