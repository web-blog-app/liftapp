<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additionalwork extends Model
{
	protected $fillable= ['address',
												'front',
												'typeLift',
    										'additionalWorks',
        								'humans',
   											'pay' 
   					     													];
}
