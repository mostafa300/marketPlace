<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $table = 'products';
    protected $fillable = [
        'name', 'price', 'category_id','prand_id', 'photot1','created_at','	updated_at', 'short_description','long_description','photot2','photot3','SKU'];

 }   

