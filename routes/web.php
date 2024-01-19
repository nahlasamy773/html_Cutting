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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
    return view('testHome');
})->name('testHome');

Route::get('about', function () {
    return view('aboutPage');
})->name('about');


Route::get('guarder', function () {
    return view('guarder');
})->name('guarder');


Route::get('contact',[PageController::class,'contact'])->name('contact');
});