<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.index');
});
Route::get('/about', function () {
    return view('main.about');
});
Route::get('/contact', function () {
    return view('main.contact');
});
Route::get('/house', function () {
    return view('main.house');
});
Route::get('/land', function () {
    return view('main.land');
});
Route::get('/singleland', function () {
    return view('main.singleland');
});
Route::get('/singlelandrent', function () {
    return view('main.singlelandrent');
});
// Route::get('/index', function()
// {
//     return view('main.index');
// });