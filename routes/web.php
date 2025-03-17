<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewsController::class, 'index'])->name('home');
Route::get('/login', [ViewsController::class, 'login'])->name('login');

Route::get('stripe', [StripeController::class, 'index']);
Route::post('stripe/create-charge', [StripeController::class, 'createCharge'])->name('stripe.create-charge');

