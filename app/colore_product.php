<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colore_product extends Model
{
    //
    public $table = 'colore_product';
    protected $fillable = [
        'product_id', 'color_id'];
}
