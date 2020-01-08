<!-- adds base -->
@extends('base')
<!-- defines url title -->
@section('title')
	Snailwhale.wal
@endsection

@section('header css')
	<style>
		/* SLIDESHOW CSS */

        * {box-sizing: border-box}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container
        {
            max-width: 800px;
            position: absolute;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next
        {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* Caption text */
        .text
        {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* specifies opacity transition */
        @-webkit-keyframes fade
        {
            from {opacity: .4}
            to {opacity: 1}
        }
        /* specifies opacity transition */
        @keyframes fade
        {
            from {opacity: .4}
            to {opacity: 1}
        }

		/* THUMBNAIL GALLERY CSS */

		div.center
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 16px;
			font-style: oblique;
		}

		div.ThumbnailGallery
		{
			margin: 15px;
			border: 1px solid #ccc;
			float: left;
			width: 100px;
			border-radius: 25px;
			overflow: hidden;
		}

		div.ThumbnailGallery:hover
		{
			border: 1px solid #777;
		}

		div.Thumbnail img
		{
			width: 100%;
			height: auto;
		}

		div.desc
		{
			padding: 5px;
			text-align: center;
			font-size: 12px;
			color: #3EA99F;
		}

		div.center-cropped
		{
			height: 100px;
			overflow:hidden;
		}

		div.center-cropped img
		{
			height: 100%;
			min-width: 100%;
			left: 50%;
			position: relative;
			transform: translateX(-50%);
		}
    </style>
@endsection


<!-- defines page content -->
@section('content')

<!-- THUMBNAIL GALLERY HTML -->
	@foreach($comics as $comic)
		@include('lightBox', array('name' => $comic['name'], 'images' => $comic['images']))
	@endforeach
	<div class="center">
		@foreach($comics as $comic)
			<div class="ThumbnailGallery" onclick='openModal("{!! $comic['name'] !!}"); currentSlide("{!! $comic['name'] !!}", 1);'>
				<div class="center-cropped"> <img src="{!! $comic['file'] !!}" alt="" /> </div>
				<div class="desc">{!! $comic['name'] !!}</div>
			</div>
		@endforeach
	</div>
@endsection
