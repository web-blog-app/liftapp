<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
  protected $fillable= ['date',
  											'address',
  											'number',
  											'detailName',
   											'notice',
   											'condition' 
   							      ];

}
