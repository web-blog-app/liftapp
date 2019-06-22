<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lifterror;
use Carbon\Carbon;

class RequestbookController extends Controller
{

  public function show()
  {

    $lifterrors=Lifterror:: orderBy('date', 'desc')
      			-> paginate(15);

    return view('requestBook', compact('lifterrors'));
  }


}
