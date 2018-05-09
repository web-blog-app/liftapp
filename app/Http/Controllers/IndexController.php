<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Lifterror;
use App\Detail;
use App\ChangeDetail;
use App\Task;
use App\AdditionalWork;

class IndexController extends Controller

{

   public function homeShow(){
   
      $currentStop = Lifterror:: 
         where('condition','=','остановлен')
        ->orderBy('date', 'desc')         
        ->get();
        
     $currentTime = Lifterror:: 
         where('condition','=','текущая заявка')
        ->orderBy('date', 'desc')         
        ->get();
        
     $noWork = Lifterror:: 
         where('condition','=','недоделано')
        ->orderBy('date', 'desc')         
        ->get();

      $task = Task::where('condition','=','не выполнено')
        ->orderBy('created_at', 'desc')         
        ->get();

      $additionalWork = Additionalwork::where('pay','=','не оплачено')
        ->orderBy('created_at', 'desc')        
        ->get();

    return view('home')->with ([
            'liftsStop' => $currentStop,
            'liftsTime' => $currentTime,
            'lifts' => $noWork,
            'tasks' => $task,
            'additionalWorks' => $additionalWork
    ]);
    }
      


 public function workUpdate(Request $request){
  $notice=$request->notice;
  $work= $request->work;
  $id = $request->id;
  $error = $request->error;
   
  $workSave= Lifterror:: where('id','=',$id);  
    
  $workSave->when($work,  function ($query) use ($work) {
                   return $query->update(['work'=> $work]);});
   
  $workSave->when($notice,  function ($query) use ($notice) {
                   return $query->update(['condition'=> $notice]);});
                   
  $workSave->when($error,  function ($query) use ($error) {
                   return $query->update(['typeOfError'=> $error]);});
  
 
  return redirect('/');
 
 }

public function lifterrorShow(){
  
  $lifterror=Lifterror:: orderBy('date', 'desc')
      ->paginate(15)  ;
   

    
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
         ->paginate(10);
   
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

  

  $detailWait = Detail:: where('condition','=','ожидание')
                    ->get();
                    
  $detailStart = Detail:: where('condition','=','нужно заказать')
                    ->get();
                    
    $detailsAkt = Detail:: where('condition','=','акт подписан')
                    ->get();
                    
    return view('details') -> with ([
            'detailsWait' => $detailWait,
            'detailsStart' => $detailStart,
            'detailsAkt' => $detailsAkt
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
  $condition= $request->condition;
  $id = $request->id;
   
  $workSave= Detail:: where('id','=',$id);  
    
  $workSave->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
   
  $workSave->when($notice,  function ($query) use ($notice) {
                   return $query->update(['notice'=> $notice]);});
  
 
  return redirect('detail');
 
 }

public function chengeDetailShow(){  

  $detail=Changedetail:: orderBy('date', 'desc')
                       -> paginate(15);
   
    return view('changeDetail')-> with ([
            'details' => $detail
   ]); 

    }

 public function addChengeDetail(Request $request){
   
    $data = $request->all();        
    $detail= new Changedetail;
    $detail->fill($data);    
    $detail-> save();
    return redirect('changeDetail');
    }

  public function searchChengeDetail(Request $request)
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
      

    $detail = Changedetail::
           when($date,  function ($query) use ( $date1, $date2) {
                    return $query->whereBetween( 'date',array($date2, $date1)); })  // поиск по дате 
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) //по адресу
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);}) // по парадной

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('typeOfLift', '=', $typeOfLift);})  //тип лифта
         ->orderBy('date', 'desc')
         ->paginate(10);
   
    return   view('changeDetail') -> with ([
            'details' => $detail
   ]); 
 
   } 

 }
