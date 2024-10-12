<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listController;
use App\Http\Controllers\PaymobPaymentController;

Route::get('/', [listController::class, 'showItem']);

Route::get('/credit',action: [PaymobPaymentController::class,'credit'])->name('credit');
Route::get('/callback',action: [PaymobPaymentController::class,'callback'])->name('callback');
