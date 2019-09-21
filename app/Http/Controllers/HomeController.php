<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Lifterror;
use App\Task;

class HomeController extends Controller
{
 	public function show(){

    //Поиск более количества $num заявок на один и тот же 
    //лифт за период $date  
    
    function liftErrorReturn($date, $num)
    {      
      $liftErrorReturn = Lifterror:: where('date','>',$date)                    
                    ->select('address','front','typeLift')
                    ->groupBy('address','front','typeLift')
                    ->havingRaw("COUNT(*) >= '$num'")
                    ->get();

      return $liftErrorReturn; 
    }

    $liftReturns30_5 = liftErrorReturn(Carbon::now()->subDays(30), 5);
    $liftReturns16_3 = liftErrorReturn(Carbon::now()->subDays(14), 3);             
  
         
    $liftsStop = Lifterror::where('condition','=','остановлен')
                ->orderBy('date', 'desc')         
                ->get();
        
    $liftsTime = Lifterror::where('condition','=','текущая заявка')
                ->orderBy('date', 'desc')         
                ->get();

    $liftAll=Lifterror::where('condition','=','остановлен')
                        ->where('condition','=','текущая заявка')
                        ->orderBy('date', 'desc')         
                        ->get();; 

    $tasks = Task::
          where('condition','=','не выполнено')
        ->orderBy('created_at', 'desc')         
        ->get();  

    return view('home',compact('liftReturns30_5','liftReturns16_3',
      'tasks','liftAll','liftsStop','liftsTime'));
    
    }      

}
