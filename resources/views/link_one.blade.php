@extends ('layouts/main-layout')

@section('content')

<div id="link-one-container">
    <div id="sep">

    </div>

    <div class="container-centered">

        <div id="main-sec">

            <div id="thumb-container">
                <img src="{{ $comics[0]['thumb'] }}" alt="">
            </div>

            <div id="left-container">
                <div id="title">{{ strtoupper($comics[0]['title']) }}</div>
                <div class="green-tab">
                    <div class="first-tab-sec">
                        <div> <span class="price">U.S. Price:</span> {{$comics[0]['price']}} </div>
                        <div class="available">AVAILABLE</div>
                    </div>
                    <div class="second-tab-sec">
                        Check availability &#9660;
                    </div>
                </div>
                <p class="paragraph"> {{$comics[0]['description']}} </p>
            </div>

            <div id="right-container">
                <div id="ad">ADVERTISEMENT</div>
                <div id="ad-container">
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
