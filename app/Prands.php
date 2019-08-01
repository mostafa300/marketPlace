<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prands extends Model
{
	public $table = 'prands';
    protected $fillable = ['name', 'description', 'photo'
    ];
}
