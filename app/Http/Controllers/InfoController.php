<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Additionalwork;
use App\Lifterror;


class InfoController extends Controller
{
	public function show(Request $request)
	{
    $start = $request -> dateStart;
    $stop = $request -> dateStop; 
    
    $address = Lifterror:: select ('address') -> groupBy('address') -> havingRaw('COUNT(*) >= 1') -> get();

    if ($start & $stop) {
      $countError = Lifterror:: whereBetween('date', [$stop, $start]) -> count();

      $countErrorLift = $address -> map(function ($item, $key) use($stop, $start) { 
        $collection = collect([]);                   
        $count = Lifterror:: whereBetween('date', [$stop, $start]) ->  where('address','=', $item->address) -> count(); 
        $merged = $collection->merge([ $item->address => $count]);        
        return $merged;        
    });  
      
    }else{
      $countError= Lifterror:: count();

      $countErrorLift = $address->map(function ($item, $key) { 
        $collection = collect([]);        
        $count = Lifterror:: where('address','=', $item->address)->count();
        $merged = $collection->merge([ $item->address => $count]);   
        return $merged;
      }); 
    }

    $additionalWork = Additionalwork::where('pay','=','Не оплачено')
                    ->orderBy('created_at', 'desc')        
                    ->get();      
   
    return   view('info') -> with ([           
            'countErrorAll'   =>   $countError,            
            'countErrorLifts' => $countErrorLift,
            'additionalWorks' => $additionalWork,
   ]);
}


  

}
