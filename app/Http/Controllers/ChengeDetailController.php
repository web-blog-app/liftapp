<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChangeDetail;
use Carbon\Carbon;

class ChengeDetailController extends Controller
{
	public function store(Request $request){

 	Changedetail::create($request->all());   
    
    \Session::flash('status', 'Выполненная работа успешно добавлена');

    return redirect('/');

	}

	public function search(Request $request){
    $date = $request->date;   
    $address= $request->address;
    $typeLift = $request->typeLift;
    $front= $request->front;
    $dateRequest= Carbon::now()->subDay($date);

    $details = Changedetail :: where('date','>=', $dateRequest) 
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) 
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);})

           -> when($typeLift, function ($query) use ($typeLift) {
                      return $query->where('typeLift', '=', $typeLift);}) 
         ->orderBy('date', 'desc')
         ->paginate(10);
   
    return   view('changeDetailSearch', compact('details'));
 
   } 

}
