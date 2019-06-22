<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChangeDetail;

class ChengeDetailPageController extends Controller
{
    
	public function show(){  

  		$details=Changedetail:: orderBy('date', 'desc')
                       		-> paginate(20);
   
    	return view('changeDetail', compact('details'));
   }
}
