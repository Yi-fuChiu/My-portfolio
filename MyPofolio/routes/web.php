<?php

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', 'ContactContrroller@create');
Route::post('/contact', 'ContactContrroller@store');

Route::get('/game', function () {
    return view('game');
});

Route::get('/informationform', function () {
    return view('informationform');
});

Route::get('/microwave', function () {
    return view('microwave');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('aboutme', function () {
    return view('aboutme');
});

Route::get('visited', function () {
    return view('visited');
});

Route::get('currentplan', function () {
    return view('currentplan');
});

Route::get('/mygallery', function () {
    return view('mygallery');
});

Route::get('/contactme', function () {
    return view('contactme');
});