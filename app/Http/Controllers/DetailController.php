<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailController extends Controller {

  public function store(Request $request){
    
  	Detail::create($request->all()); 
    
  	\Session::flash('status', 'Деталь  успешно добавлена!');

  	return redirect('detail');
   }

public function update(Request $request){
  
  $condition= $request->condition;  
   
  $workSave= Detail:: where('id','=',$request->id);  
    
  $workSave->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
   

  
 \Session::flash('status', 'Деталь  успешно добавлена!');
  return redirect('details');
 
 }
}
