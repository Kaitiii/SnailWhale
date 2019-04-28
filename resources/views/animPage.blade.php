<!-- adds base -->
@extends('base')
<!-- defines url title -->
@section('title')
	Snailwhale.wal
@endsection

@section('header css')
	<style>
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

	<!-- THUMBANIL GALLERY HTML-->
    <div class="center">
		@php
			$first = true;
		@endphp

		@foreach($animations as $animation)
			@if(!$first)
				<span class="'spacer"></span>
			@endif

			<div class="ThumbnailGallery" onclick = window.location.assign("{!! route('animationDisplay', array($animation['id'])) !!}")>
				<div class="center-cropped"> <img src="\Assets\Animations\{!! str_replace(' ', '', $animation['name']) !!}\Thumb.png" alt="" /> </div>
				<div class="desc">{!! $animation['name'] !!}</div>
			</div>

			@php
				$first = false;
			@endphp
		@endforeach
    </div>
@endsection