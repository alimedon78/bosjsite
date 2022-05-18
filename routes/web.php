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
    return view('index');
});
Route::get('/index.html', function () {
    return view('index');
});
Route::get('/watch', function () {
    return view('watch');
});
Route::get('/high-courts', function () {
    return view('high-courts');
});
Route::get('/sharia-court', function () {
    return view('sharia-court');
});
Route::get('/magistrate-courts', function () {
    return view('magistrate-courts');
});
Route::get('/area-courts', function () {
    return view('area-courts');
});
Route::get('/litigation', function () {
    return view('litigation');
});
Route::get('/state-appeal', function () {
    return view('state-appeal');
});
Route::get('/probate-registry', function () {
    return view('probate-registry');
});
Route::get('/oadr', function () {
    return view('oadr');
});
Route::get('/adr', function () {
    return view('adr');
});
Route::get('/translation', function () {
    return view('translation');
});
Route::get('/ict', function () {
    return view('ict');
});
Route::get('/jsc', function () {
    return view('jsc');
});
Route::get('/jrc', function () {
    return view('jrc');
});
Route::get('/cause-list', function () {
    return view('cause-list');
});
Route::get('/ncms', function () {
    return view('ncms');
});
Route::get('/news-and-events', function () {
    return view('news-and-events');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});