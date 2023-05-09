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






Route::get('/action-comics-the-deluxe-edition', function () {

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

    return view('link_one', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Action Comics #1000: The Deluxe Edition');







Route::get('/american-vampire', function () {

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

    return view('link_two', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('American Vampire 1976 #1');







Route::get('/aquaman-vol-4-underworld', function () {

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

    return view('link_three', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Aquaman Vol. 4: Underworld');







Route::get('/batgirl-1', function () {

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

    return view('link_four', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batgirl #1');






Route::get('/batman-56', function () {

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

    return view('link_five', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman #56');







Route::get('/batman-beyond-1', function () {

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

    return view('link_six', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman Beyond #1');







Route::get('/batman-superman-1', function () {

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

    return view('link_seven', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman/Superman #1');






Route::get('/batman-superman-annual-1', function () {

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

    return view('link_eight', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman/Superman Annual #1');








Route::get('/batman-the-joker-war-zone-1', function () {

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

    return view('link_nine', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman: The Joker War Zone #1');








Route::get('/batman-three-jokers-1', function () {

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

    return view('link_ten', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman: Three Jokers #1');







Route::get('/batman-white-knight-presents-harley-quinn-1', function () {

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

    return view('link_eleven', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Batman: White Knight Presents: Harley Quinn #1');







Route::get('/catwoman-vol-1-copycats', function () {

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

    return view('link_twelve', compact('links', 'buyLinks', 'footerLinks', 'socialIconsList', 'comics'));
})->name('Catwoman Vol. 1: Copycats');
