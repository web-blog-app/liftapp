<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Lifterror;
class IndexController extends Controller

{
 public function search(Request $request)
   {
    
    $date = $request->Date;
    $date1=$request->Date1;
   

    if(!$date1){     //костыль, как без него не придумал
       $date1=$date;
    }
   
   

    $address= $request->Address;
    $typeOfLift = $request->TypeOfLift;
    $front= $request->Front;  
    
    dump($date1);



    $date3 = Carbon::now()->subDay(3);// получение текущего дня -3
    $dateTomorrow= Carbon::now();// получение текущего дня 
    dump($dateTomorrow);
    


    if($address or $typeOfLift or $date or $front){

      $lifterror = lifterror::
           when($date,  function ($query) use ($date, $date1) {
                    return $query->whereBetween( 'Date',array($date, $date1)); })  // поиск по дате 
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('Address', '=', $address);}) //по адресу
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('Front', '=', $front);}) // по парадной

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('TypeOfLift', '=', $typeOfLift);})  //тип лифта
         ->orderBy('Date', 'desc')
         ->get();
    }else{

        $lifterror=lifterror::whereBetween( 'Date',array($date3, $dateTomorrow))
        ->orderBy('Date', 'desc')
        ->get(); 
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
   	$lifterror= new lifterror;
   	$lifterror->fill($data);  
   	
   	$lifterror-> save();
   	return redirect('page/add');
    }

 
 }
