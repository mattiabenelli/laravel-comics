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
    $navmenu = config('comics.menu');
    $comics = config('comics.fumetti');
    $itemBlueSection = config('comics.iconBlue');
    
    return view('home', compact('navmenu', 'comics', 'itemBlueSection'));
});
