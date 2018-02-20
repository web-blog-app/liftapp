<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Lifterror;
use App\Detail;
use App\ChangeDetail;

class IndexController extends Controller

{

   public function homeShow(){
   
      $current = Lifterror:: whereNull('work')
        -> orwhere('notice','=','остановлен')         
        ->get();
       

    return view('home')->with ([
            'lifts' => $current
    ]);
    }

 public function workUpdate(Request $request){
  $notice=$request->notice;
  $work= $request->work;
  $id = $request->id;
   
  $workSave= Lifterror:: where('id','=',$id);  
    
  $workSave->when($work,  function ($query) use ($work) {
                   return $query->update(['Work'=> $work]);});
   
  $workSave->when($notice,  function ($query) use ($notice) {
                   return $query->update(['Notice'=> $notice]);});
  
 
  return redirect('/');
 
 }

public function lifterrorShow(){
  
  $lifterror=Lifterror::paginate(10);

    
  return   view('requestBook') -> with ([
            'lifts' => $lifterror
   ]); 
  } 

 public function search(Request $request)
   {
    $date = $request->date;   
    $address= $request->address;
    $typeOfLift = $request->typeOfLift;
    $front= $request->front; 

    switch ($date) {
      case 'week':
       $date2 = Carbon::now()->subDay(7);
       $date1= Carbon::now();
      
       case 'month':
         $date2 = Carbon::now()->subMonth(1);
         $date1= Carbon::now();
        break;   
      case 'year':
         $date2 = Carbon::now()->subYear(1);
         $date1= Carbon::now();
        break;   
    }
      

    $lifterror = Lifterror::
           when($date,  function ($query) use ( $date1, $date2) {
                    return $query->whereBetween( 'date',array($date2, $date1)); })  // поиск по дате 
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) //по адресу
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);}) // по парадной

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('typeOfLift', '=', $typeOfLift);})  //тип лифта
         ->orderBy('date', 'desc')
         ->get();
   
    return   view('requestBook') -> with ([
            'lifts' => $lifterror
   ]); 
 
   }


   public function addLift(Request $request){
   
   	$data = $request->all();      	
   	$lifterror= new Lifterror;
   	$lifterror->fill($data);   	
   	$lifterror-> save();
   	return redirect('/');
    }

public function detailShow(){

  

  $detail = Detail:: where('pay','=','Ожидание')         
                      ->get();
   
    return view('details') -> with ([
            'details' => $detail
   ]); 

    }

  
 public function addDetail(Request $request){
   
    $data = $request->all();        
    $detail= new Detail;
    $detail->fill($data);    
    $detail-> save();
    return redirect('detail');
    }

public function detailUpdate(Request $request){
  $notice= $request->notice;
  $pay= $request->pay;
  $id = $request->id;
   
  $workSave= Detail:: where('id','=',$id);  
    
  $workSave->when($pay,  function ($query) use ($pay) {
                   return $query->update(['pay'=> $pay]);});
   
  $workSave->when($notice,  function ($query) use ($notice) {
                   return $query->update(['Notice'=> $notice]);});
  
 
  return redirect('detail');
 
 }

public function chengeDetailShow(){  

  $detail=Changedetail::all();
   
    return view('changeDetail')-> with ([
            'details' => $detail
   ]); 


    }

 public function addChengeDetail(Request $request){
   
    $data = $request->all();        
    $detail= new Changedetail;
    $detail->fill($data);    
    $detail-> save();
    return redirect('detail');
    }
 

 }
