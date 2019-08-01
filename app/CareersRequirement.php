<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareersRequirement extends Model
{
    public $table = 'careers_requirements';
    protected $fillable = ['id','name','category','place','Comments','About','Duties','Requirement'];
}
