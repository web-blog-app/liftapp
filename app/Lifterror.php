<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lifterror extends Model
{
 protected $fillable= [ 'Date',
  											'Address',
  											'Front',
   											'TypeOfLift', 
   											'TypeOfError',
    										'Work',
     										'Notice'];




}