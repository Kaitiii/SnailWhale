<!-- this is the home page. currently, it only references the base -->
@extends('base')
<!-- the home page will display recent uploads and updates -->
<!-- at most, 10 uploads and 10 updates should display on the home page -->
@section('title')
    Snailwhale.wal
@endsection

{{Html::style('css/owl.theme.default.min.css')}}
{{Html::style('css/owl.carousel.min.css')}}

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
            margin-bottom: 20px;
            padding: 25px 50px;
            background-color: #6cb2eb;
        }
    </style>
@endsection

@section('content')
    <div class="center">
        <div class="updateBorder">
            Hello!! This is my first update! This site is still under construction, but there will be more to come soon!
        </div>
    </div>
@endsection

@section('footer-script')
    {{Html::script('js/jquery-3.4.0.min.js')}}


@endsection