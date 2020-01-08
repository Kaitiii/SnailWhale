<!-- this is the home page. currently, it only references the base -->
@extends('base')
<!-- the home page will display recent uploads and updates -->
<!-- at most, 10 uploads and 10 updates should display on the home page -->
@section('title')
    Snailwhale.wal
@endsection

@section('header css')
    <style>
        div.center
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            font-style: oblique;
        }

        div.updateBorder
        {
            border-style: solid;
            border-width: 2px;
            border-color: #64d5ca;
            border-radius: 5px;
            margin-top: 150px;
            padding: 25px 50px;
            background-color: #6cb2eb;
        }
    </style>
@endsection


@section('content')
    <div class="comicCarouselContainer center">
        <div class="owl-carousel" id="comicCarousel">

        </div>
    </div>

    <div class="animCarouselContainer center">

    </div>

    <div class="gameCarouselContainer center">

    </div>

    <div class="updateBorder center">
        Hello!! This is my first update! This site is still under construction, but there will be more to come soon!
    </div>
@endsection

@section('footer-script')
    <script>
        $('#comicCarousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })
    </script>


@endsection
