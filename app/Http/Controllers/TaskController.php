<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTaskRequest;

class TaskController extends Controller
{
		
	public function store(CreateTaskRequest $request)
	{    

		if ($request->hasFile('fotoTask')) {
			$destinationPath = 'img/task';
			$file = $request->file('fotoTask');    
      $file_name = 'task' . time() .'.' . $file->getClientOriginalExtension();
			$file->move($destinationPath , $file_name); 

			Task::create(array(
		 										"address" => $request->address,
  											"front" => $request->front,
  											"typeLift" => $request->typeLift,
  											"task" => $request->task,
  											"human" => $request->human,
  											"_token" => $request->token,
  											"fotoTask" => 'img/task/' . $file_name
																																));  
		} else{
			
			Task::create($request->all());
		}

		\Session::flash('status', 'Новая задача успешно добавлена!');
		
		return redirect('/');
		}

	public function update(Request $request)
	{		 
	
		$workSave = Task::where('id','=',$request->id)
			->update(['condition'=>  'Выполнено']);  
	 
		return redirect('/');

	}

	 
}
