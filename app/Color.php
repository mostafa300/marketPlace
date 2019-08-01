<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    public $table = 'colors';
    protected $fillable = [
        'name', 'description'];
}
