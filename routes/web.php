<?php

use App\Events\CarMoved;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/app', function () {
    // dd('route is working');
    return view('app');
});

Route::get('/move', function () {
    event(new CarMoved(22.845640, 89.540329));
    // event(new CarMoved(-24.344, 131.036));
    // event(new CarMoved(-12.344, 111.036));
});

