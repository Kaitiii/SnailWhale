<?php

namespace App\Http\Controllers;

use App\Comics;
use App\Animations;
use Illuminate\Filesystem\Filesystem;

class IndexController extends Controller
{
	public function index()
	{
		return view('home');
	}
	
	public function comicsPage()
	{
		$comicsModel = new Comics();
		$comics      = $comicsModel->get();
		$comics      = $comics->map(function($comic)
		{
			$path = 'Assets\\comics\\'.$comic->file."\\Slides";
			$path = public_path($path);
			
			$fileSystem = new Filesystem();
			$images     = $fileSystem-> files($path);
			$images     = array_map(function($image)
			{
				$publicPath = public_path();
				$image      = str_replace($publicPath, '', $image);

				return url($image);
			}, $images);
			
			return
			[
				'name'=>$comic->name,
				'file'=>url('Assets\\comics\\'.$comic->file."\\Thumbnail.png"),
				'images'=>$images,
			];
		});
		
		return view('comicsPage',
		[
			'comics'=>$comics,
		]);
	}
	
	public function animPage()
	{
		$animationsModel= new Animations();
		$animations = $animationsModel->get();
		
		$animations = $animations->map(function($animation)
		{
			$folder = $animation->file;
			
			return
			[
				'name'=>$animation->name,
                'id'=>$animation->id,
				'thumbnail'=>url('Assets\\Animations\\'.$folder.'\\thumbnail.png'),
			];
		});
		
		return view('animPage',
		[
			'animations'=>$animations,
		]);
	}

	public function animDisplay($ID)
    {
        $animationModel = new Animations;

        $Animation = $animationModel -> find($ID);

        $folder = $Animation->file;

        return view('animDisplay', array(
            "animation" => $Animation,
            'video'=>url('Assets\\Animations\\'.$folder.'\\Anim.mp4')));
    }
	
	public function gamesPage()
	{
		return view('gamesPage');
	}
}