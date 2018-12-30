<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Lifterror;
use App\Detail;
use App\ChangeDetail;
use App\Task;
use App\Additionalwork;


class IndexController extends Controller

{  
   public function homeShow(){
    $date30 = Carbon::now()->subDays(30);
    $date16 = Carbon::now()->subDays(16);
    $date8  = Carbon::now()->subDays(8);
         
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

    $task = Task::
          where('condition','=','не выполнено')
        ->orderBy('created_at', 'desc')         
        ->paginate(5);      
        
    $liftAll=Lifterror::where('condition','=','недоделано')
                         ->orWhere('condition','=','текущая заявка')
                         ->orWhere('condition','=','остановлен')
                          ->get();                          
        
    $liftReturn30_5 = Lifterror:: where('date','>',$date30)
                    ->where('condition','!=','недоделано')
                    ->select('address','front','typeOfLift')
                    ->groupBy('address','front','typeOfLift')
                    ->havingRaw('COUNT(*) > 5')
                    ->get(); 
                    
    $liftReturn16_3 = Lifterror:: where('date','>',$date16)
                    ->where('condition','!=','недоделано')
                    ->select('address','front','typeOfLift')
                    ->groupBy('address','front','typeOfLift')
                    ->havingRaw('COUNT(*) > 3')
                    ->get();              
    $liftReturn7_2 = Lifterror:: where('date','>',$date8)
                    ->where('condition','!=','недоделано')
                    ->select('address','front','typeOfLift')
                    ->groupBy('address','front','typeOfLift')
                    ->havingRaw('COUNT(*) > 2')
                    ->get();       
   
    return view('home')->with ([
            'liftsStop' => $currentStop,
            'liftsTime' => $currentTime,
            'lifts' => $noWork,
            'tasks' => $task,            
            'liftAll' => $liftAll,
            'liftReturns30_5' => $liftReturn30_5,
            'liftReturns16_3' => $liftReturn16_3,
            'liftReturns7_2' => $liftReturn7_2,            
             
    ]);
    }
      


 public function workUpdate(Request $request){
  $notice=$request->notice;
  $condition=$request->condition;
  $work= $request->work;
  $id = $request->id;
  $error = $request->error;
  
  $workSave= Lifterror:: where('id','=',$id);  
    
  $workSave->when($work,  function ($query) use ($work) {
                   return $query->update(['work'=> $work]);});
                   
  $workSave->when($notice,  function ($query) use ($notice) {
                   return $query->update(['notice'=> $notice]);});
   
  $workSave->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
                   
  $workSave->when($error,  function ($query) use ($error) {
                   return $query->update(['typeOfError'=> $error]);});
                   
    
  \Session::flash('status', 'Работа сделана');
 
  return redirect('/');
 
 }
 
  public function taskUpdate(Request $request){
  $condition=$request->condition;
  $id = $request->id;
  
  $workSave= Task :: where('id','=',$id);  
   
  $workSave->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
 
  return redirect('/');
 
 }
 
  public function additionalWorkUpdate(Request $request){
  $pay=$request->pay;
  $id = $request->id;
  
  $workSave= AdditionalWork :: where('id','=',$id);  
   
  $workSave->when($pay,  function ($query) use ($pay) {
                   return $query->update(['pay'=> $pay]);});
 
  return redirect('/');
 
 }
 
public function addTask(Request $request){
       
    $this->validate($request, [
        'task' => 'required'
    ]);
    
    $data = $request->all();
    $task= new Task;
    $task->fill($data);     
    $task-> save();
    
            
\Session::flash('status', 'Новая задача успешно добавлена!');
    
    return redirect('/');
    
    }
    
public function addАdditionalWork(Request $request){
       
    $this->validate($request, [
        'additionalWorks' => 'required',
        'humans' => 'required'
    ]);
    
    $data = $request->all(); 
    $additionalWork= new Additionalwork;
    $additionalWork->fill($data);     
    $additionalWork-> save();
    
            
\Session::flash('status', 'Дополнительная работа успешно добавлена!');
    
    return redirect('/');
    
    }

 public function search(Request $request)
   {
    $date = $request->date;   
    $address= $request->address;
    $typeOfLift = $request->typeOfLift;
    $front= $request->front;     
    $dateRequest= Carbon::now()->subDay($date);
 
    if(empty($date)){
       $lifterror=Lifterror:: orderBy('date', 'desc')
      ->paginate(15);
    }else{   
    $lifterror = Lifterror::
          where('date','>=', $dateRequest)  
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) 
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);}) 

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('typeOfLift', '=', $typeOfLift);})  
         ->orderBy('date', 'desc')
         ->paginate(40);
        }
   
    return   view('requestBook') -> with ([
            'lifts' => $lifterror
   ]); 
 
   }


   public function addLift(Request $request){
       
    $this->validate($request, [
        'date' => 'required', 
        'address' => 'required', 
        'front' => 'required', 
        'typeOfLift' => 'required', 
        'condition' => 'required'
    ]);
    
    $data = $request->all();        
    $lifterror= new Lifterror;
    $lifterror->fill($data);    
    $lifterror-> save();
    
            
\Session::flash('status', 'Заявка успешно добавлена');
    
    return redirect('/');
    
   
    
    }

public function detailShow(){

    $detailWait = Detail:: where('condition','=','ожидание')
                    ->get();
                    
    $detailStart = Detail:: where('condition','=','нужно заказать')
                    ->get();
                    
    $detailsAkt = Detail:: where('condition','=','акт подписан')
                    ->get();
    $detailAll= Detail:: where('condition','=','акт подписан')
                     ->orWhere('condition','=','нужно заказать')
                     ->orWhere('condition','=','ожидание')
                    ->get();
                    
    return view('details') -> with ([
            'detailsWait' => $detailWait,
            'detailsStart' => $detailStart,
            'detailsAkt' => $detailsAkt,
            'detailAll' => $detailAll,
   ]); 

    }

  
 public function addDetail(Request $request){
   
    $data = $request->all();        
    $detail= new Detail;
    $detail->fill($data);    
    $detail-> save();
     \Session::flash('status', 'Деталь  успешно добавлена!');
    return redirect('detail');
    }

public function detailUpdate(Request $request){
  
  $condition= $request->condition;
  $id = $request->id;
 
   
  $workSave= Detail:: where('id','=',$id);  
    
  $workSave->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
   

  
 \Session::flash('status', 'Деталь  успешно добавлена!');
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
    \Session::flash('status', 'Выполненная работа успешно добавлена');
    return redirect('/');
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
                    return $query->whereBetween( 'date',array($date2, $date1)); }) 
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) 
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);})

           -> when($typeOfLift, function ($query) use ($typeOfLift) {
                      return $query->where('typeOfLift', '=', $typeOfLift);}) 
         ->orderBy('date', 'desc')
         ->paginate(10);
   
    return   view('changeDetail') -> with ([
            'details' => $detail
   ]); 
 
   } 

   public function infoShow()
{
     $countErrorAll= Lifterror:: count();

     $address = Lifterror:: 
                 select ('address')
                ->groupBy('address')
                ->havingRaw('COUNT(*) > 1')
                ->get();
    
         
    $countErrorLift = $address->map(function ($item, $key) { 
        
        $counts = Lifterror:: where('address','=', $item->address)
                              ->count();
                              
        $collection = collect([]); 
        $merged = $collection->merge([ $item->address => $counts]);
    
         return $merged;
    });

    $additionalWork = Additionalwork::
          where('pay','=','ожидание')
        ->orderBy('created_at', 'desc')        
        ->get();      
   
    return   view('info') -> with ([           
            'countErrorAll' => $countErrorAll,
            'countErrorLifts' => $countErrorLift,
            'additionalWorks' => $additionalWork,
   ]); 
}

 }
