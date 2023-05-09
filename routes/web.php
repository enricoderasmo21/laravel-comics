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

    $links = [
        "charachters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"
    ];

    $data = [ $links ];
 
    
    return view('home', compact('data'));
});
