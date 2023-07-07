<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->name('google-redirect');

Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->name('google-callback');

Route::post('logout', [SocialiteController::class, 'logout'])
    ->name('logout');
