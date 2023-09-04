<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler{

    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];




    public function render($request, Throwable $exception){

        if ($exception instanceof ModelNotFoundException && $request->wantsJson()) {
            $locale = ($request->hasHeader('Accept-Language')) ? $request->header('Accept-Language') : "ar";
            app()->setLocale($locale);
            return response()->json(['message' => __('site.page_not_found')], 404);
        }

        return parent::render($request, $exception);
    }

    public function register(){
        $this->reportable(function (Throwable $e) {

        });
    }
}
