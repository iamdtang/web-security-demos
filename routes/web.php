<?php

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

// visit http://localhost/writeareview/biz/9xyjvSkidMTngtyZ6-Upaw
Route::get('/writeareview/biz/{bizId}', function () {
    return view('write-review');
});

Route::post('/write-a-review', function() {
    dd('Review posted');
});
