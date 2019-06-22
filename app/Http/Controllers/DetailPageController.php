<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailPageController extends Controller
{
    public function detailShow(){

    $detailWait = Detail:: where('condition','=','ожидание')
                    ->get();
                    
    $detailStart = Detail:: where('condition','=','нужно заказать')
                    ->get();
                    
    $detailsAkt = Detail:: where('condition','=','акт подписан')
                    ->get();
    $detailAll= Detail:: all();
                    
    return view('details') -> with ([
            'detailsWait' => $detailWait,
            'detailsStart' => $detailStart,
            'detailsAkt' => $detailsAkt,
            'detailAll' => $detailAll,
   ]); 

    }

}
