<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Changedetail extends Model
{

protected $fillable= ['address',
  										'front',
   										'typeOfLift',    											
    									'detail',
      								'notice'
      							];

 
}