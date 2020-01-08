<!doctype html>
<!-- locale defines language, region and special preferences
 the application is determining the language-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- defining url title -->
        <title>@yield('title')</title>
		<!-- referencing style sheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Bonbon|Molle:400i|Pacifico|Patrick+Hand|Permanent+Marker|Ruge+Boogie" rel="stylesheet">
		<link rel="stylesheet" href="/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="/css/style.css">

		{{--font-family: 'Pacifico', cursive;--}}
		{{--font-family: 'Permanent Marker', cursive;--}}
		{{--font-family: 'Patrick Hand', cursive;--}}
		{{--font-family: 'Molle', cursive;--}}
		{{--font-family: 'Ruge Boogie', cursive;--}}
		{{--font-family: 'Bonbon', cursive;--}}


		@yield('header css')

    </head>
    <body class='gradient'>
		<!-- index button -->
		<h1>Snailwhale</h1>
		<img id="indexGif" class="centeredImage" src="\Assets\Images\SnailWhale.gif" alt="Snail Whale">

		<div class="buttonHeadContainer">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-2">
                    <div class= "buttonHead">
				        <span id="comicButton" class="buttonContainer">
					        <div class="textContainer">
					    	    <img id="buttons" src="\Assets\Images\bubbleButton1.png" alt="Comic Button">
					    	    <h2><div class="center">Comics</div></h2>
					        </div>
				        </span>
                    </div>
                </div>
                <div class="col-2">
                    <span id="animButton" class="buttonContainer">
				        <div class="textContainer">
				        	<img id="buttons" src="\Assets\Images\bubbleButton2.png" alt="Animation Button">
				        	<h2><div class="center">Animations</div></h2>
				        </div>
				    </span>
                </div>
                <div class="col-2">
				    <span id="gameButton" class="buttonContainer">
				        <div class="textContainer">
				        	<img id="buttons" src="\Assets\Images\bubbleButton3.png" alt="Game Button">
				        	<h2><div class="center">Games</div></h2>
				        </div>
				    </span>
                </div>
			</div>
		</div>
		<!-- defines content -->
		@yield('content')

    </body>
	<!-- defines script -->
	@yield('footer script')

	<script src="/js/jquery-3.4.0.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>

	<!-- allows buttons to take user to respective pages when clicked -->
	<script>
		var comicButton= document.getElementById("comicButton");
		comicButton.onclick= function(){
			window.location.assign("{!! route('comics') !!}");
		}
		var animButton= document.getElementById("animButton");
		animButton.onclick= function(){
			window.location.assign("{!! route('animations') !!}");
		}
		var gameButton= document.getElementById("gameButton");
		gameButton.onclick= function(){
			window.location.assign("{!! route('games') !!}");
		}
		var indexGif= document.getElementById("indexGif");
		indexGif.onclick= function(){
			window.location.assign("{!! route('home') !!}");
		}
	</script>
</html>
