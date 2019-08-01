<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    public $table = 'products';
    protected $fillable = ['parent_id','name', 'created_at', 'updated_at','description','photo' ];
}
