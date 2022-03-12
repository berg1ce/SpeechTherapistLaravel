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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/graphik-priema', function () {
    return view('graphik-priema');
});

Route::get('/materials', function () {
    return view('materials');
});

Route::get('/price-list', function () {
    return view('price-list');
});

Route::get('/therapy', function () {
    return view('therapy');
});

Route::get('/zapis-na-priem', function () {
    return view('zapis-na-priem');
});

Route::get('/enter', function () {
    return view('enter');
});

Route::get('/signup', function () {
    return view('signup');
});

 