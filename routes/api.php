<?php

use App\Http\Controllers\Api\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('transactions',[WalletController::class,'store']);
Route::get('transactions',[WalletController::class,'index']);
