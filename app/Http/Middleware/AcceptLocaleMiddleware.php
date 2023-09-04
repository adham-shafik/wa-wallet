<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AcceptLocaleMiddleware{
    public function handle($request, Closure $next){
        $locale = ($request->hasHeader('lang')) ? $request->header('lang') : "ar";
        $locale = ($request->hasHeader('Accept-Language')) ? $request->header('Accept-Language') : "ar";
        app()->setLocale($locale);
        Carbon::setlocale($locale);
        return $next($request);
    }
}

