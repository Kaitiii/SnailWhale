<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animations extends Model
{
	public $table = 'animations';
    public $fillable = [
		'name', 'file'
	];
}
