<?php

use App\Jobs\SayHelloToLogJob;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendConfirmationEmailJob;


Route::get('/', function () {
    // dispatch(new SayHelloToLogJob());
    dispatch(new SendConfirmationEmailJob('adham.shafik@fudex.com.sa'));//5ms



});
