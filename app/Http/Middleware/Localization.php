<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */


     /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
   public function handle(Request $request, Closure $next)
   {
        
        if($request->has('lang')){
            if(in_array($request->lang, ['uz', 'ru','en'])){
                $locale = $request->lang;
                session()->put('locale', $locale);
                app()->setLocale($locale);
            }
        }elseif (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }


       return $next($request);
   }
}