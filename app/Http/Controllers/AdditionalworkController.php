<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additionalwork;
use App\Http\Requests\CreateAdditionalworkRequest;

class AdditionalworkController extends Controller
{
	public function store(CreateAdditionalworkRequest $request)
		{        
			Additionalwork::create($request->all());   
						
			\Session::flash('status', 'Новая дополнительная работа успешно добавлена!');
		
			return redirect('/');
		}

	public function update(Request $request)
		{
			$workSave = Additionalwork::where('id','=',$request->id)
											->update(['pay'=> "Оплачено"]);  
	 
			return redirect('info');
		}
}
