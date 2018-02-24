<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lifterror extends Model
{
 protected $fillable= [ 'date',
  											'address',
  											'front',
   											'typeOfLift', 
   											'typeOfError',
   											'condition',   											
    										'work',
      									'notice'];


 
}