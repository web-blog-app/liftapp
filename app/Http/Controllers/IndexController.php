<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lifterror;
class IndexController extends Controller

{
 public function search(Request $request)
   {

    $address= $request->Address;
    $typeOfLift = $request->TypeOfLift;
    $date = $request->Date;
    $front= $request->Front;  
    $date1 = $request->Date1;
    dump($date1);
    if($address or $typeOfLift or $date or $front){

      $lifterror = lifterror::
           when($date, function ($query) use ($date, $date1) {
                    return $query->whereBetween( 'Date',array($date, $date1)); })  // поиск по дате 
    
           ->when($address, function ($query) use ($address) {
                    return $query->where('Address', '=', $address);}) //по адресу
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('Front', '=', $front);}) // по парадной

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('TypeOfLift', '=', $typeOfLift);})  //тип лифта
         
         ->get();
    }else{
        $lifterror=lifterror::all(); 
    }
   
     
   
   return   view('page') -> with ([
   	        'lifts' => $lifterror
   ]); 
   


   }
   public function add(){
   		return view('add-content');
   }
   public function store(Request $request){
   	$data = $request->all();
   	dump($data);
   	$lifterror= new lifterror;
   	$lifterror->fill($data);    
   	dump($lifterror);
   	$lifterror-> save();
   	return redirect('/');
    }

 
 }
