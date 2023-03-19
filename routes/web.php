<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/xss-demo-1', function () {
    // imagine this came from the database
    $reviews = [
        "Review 1",
        "<script>alert('hacked!')</script>",
    ];

    return view('xss-demo-1', [
        'reviews' => $reviews,
    ]);
});

// visit http://localhost/xss-demo-2?q=%3Cscript%3Ealert(%27hacked%27)%3C/script%3E
Route::get('/xss-demo-2', function (Request $request) {
    return view('xss-demo-2', [
        'q' => $request->query('q'),
    ]);
});
