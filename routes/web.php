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
    
    return view('home');
})->name('homepage');


Route::get('/prodotti', function() {
    $comics = config('comics.fumetti');
    $itemBlueSection = config('comics.iconBlue');
    
    return view('products', compact('comics', 'itemBlueSection'));
})->name('products');
