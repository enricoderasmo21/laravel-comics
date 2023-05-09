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

    $links = ["charachters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"];

    $footerLinks = [
        [
        'title' => "dc comics",
        'links' => ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"]
        ],

        [   
        'title' => "shop",
        'links' => ["Shop DC", "Shop DC Collectibles"]
        ],

        [
        'title' => "dc",
        'links' => ["Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us",]
        ],

        [
        'title' => "sites",
        'links' => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
        ]
    ];

    $buyLinks = [
        [
            'image'=> "resources/img/buy-comics-digital-comics.png",
            'text'=> "digital comics"
        ],
        [
            'image'=> "resources/img/buy-comics-merchandise.png",
            'text'=> "dc merchandise"
        ],
        [
            'image'=> "resources/img/buy-comics-subscriptions.png",
            'text'=> "subscription"
        ],
        [
            'image'=> "resources/img/buy-comics-shop-locator.png",
            'text'=> "comic shop locator"
        ],
        [
            'image'=> "resources/img/buy-dc-power-visa.svg",
            'text'=> "dc power visa"
        ],
    ];

    $socialIconsList = ["resources/img/footer-facebook.png", "resources/img/footer-periscope.png", "resources/img/footer-pinterest.png", "resources/img/footer-twitter.png", "resources/img/footer-youtube.png",];
 
    $comics = config('comics');

    return view('home', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
});
