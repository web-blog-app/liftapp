<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable= ['task',  											
   											'condition',
   											'address',
   											'typeLift',
   											'fotoTask',
   											'front',
   											'human' 
   							  									];
}
