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
	
		@yield('header css')
	
        <!-- Styles -->
		<style>
			/* centers image */
			.centeredImage{
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			/* creates gradient */
			.gradient {
				background: linear-gradient(#008B8B, #00008B);
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
			/* creates button container for index button */
			.buttonHeadContainer {
				text-align: center;
				margin-top: 15px;
			}
			/* creates button */
			.buttonHead{
				display: inline-block;
			}
			/* spacer */
			.spacer {
				margin-left: 12px;
			}
			/* creates container for content */
			.contentContainer {
				margin-top: 25px;
			}
			/* creates container for button */
			.buttonContainer {
				display: inline-block;
				width: 120px;
				height: 80px;
			}
			/* defines position of text in it's container */
			.buttonText {							
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			/* creates container for button text */
			.textContainer{
				position: relative;
			}
			/* centers content */
			.center {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				font-size: 16px;
				font-style: oblique;
			}
			/* defines font for text in header */
			h1{
				font-family: Arial;
			}
		</style>
    </head>
	<!-- shows gradient as background for the body-->
    <body class='gradient'>
		<!-- index button -->
		<img id="indexGif" class= "centeredImage" src="\Assets\Images\SnailWhale.gif" alt="Snail Whale" style="width:180px; height:140px;">
		<!-- comic button -->
		<div class="buttonHeadContainer">
			<div class= "buttonHead">
				<span id="comicButton" class="buttonContainer">
					<div class="textContainer">
						<img src="\Assets\Images\bubbleButton1.png" alt="Comic Button" style="width:100%; height:100%;">
						<h1><div class="center">Comics</div></h1>
					</div>
				</span>
				
				<!-- spacer -->
				<span class="spacer"></span>
				
				<!-- animation button -->
				<span id="animButton" class="buttonContainer">
				<div class="textContainer">
					<img src="\Assets\Images\bubbleButton2.png" alt="Animation Button" style="width:100%; height:100%;">
					<h1><div class="center">Animations</div></h1>
				</div>
				</span>
				
				<!-- spacer -->
				<span class="spacer"></span>
				
				<!-- game button -->
				<span id="gameButton" class="buttonContainer">
				<div class="textContainer">
					<img src="\Assets\Images\bubbleButton3.png" alt="Game Button" style="width:100%; height:100%;">
					<h1><div class="center">Games</div></h1>
				</div>
				</span>
				
			</div>
		</div>
		<!-- defines content -->
		@yield('content')
		
    </body>
	<!-- defines script -->
	@yield('footer script')
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
