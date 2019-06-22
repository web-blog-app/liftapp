<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Lifterror;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLifterrorRequest;



class LifterrorController extends Controller
{ 
     
    public function store(CreateLifterrorRequest $request)
    {
        Lifterror::create($request->all()); 

        \Session::flash('status', 'Заявка успешно добавлена');

        return redirect('/');
    }

    public function update(Request $request, Lifterror $lifterror)
    {
        $notice = $request->notice;
        $condition = $request->condition;
        $work = $request->work;       
        $error = $request->error;
  
        $workSave = Lifterror:: where('id','=',$request->id);  
    
        $workSave ->when($work,  function ($query) use ($work) {
                   return $query->update(['work'=> $work]);});
                   
        $workSave ->when($notice,  function ($query) use ($notice) {
                   return $query->update(['notice'=> $notice]);});
   
        $workSave ->when($condition,  function ($query) use ($condition) {
                   return $query->update(['condition'=> $condition]);});
                   
        $workSave ->when($error,  function ($query) use ($error) {
                   return $query->update(['typeError'=> $error]);});
                   
    
        \Session::flash('status', 'Работа сделана');
 
        return redirect('/');
    }

    public function search(Request $request)
    {

    $date = $request->date;   
    $address = $request->address;
    $typeLift = $request->typeLift;
    $front = $request->front;     
    $dateRequest = Carbon::now()->subDay($date);
    
    $lifts = Lifterror :: where('date','>=', $dateRequest)  
    
          ->when($address, function ($query) use ($address) {
                    return $query->where('address', '=', $address);}) 
            
          ->when($front, function ($query) use ($front) {
                    return $query->where('front', '=', $front);}) 

           -> when($typeLift, function ($query) use ($typeLift) {
                      return $query->where('typeLift', '=', $typeLift);})  
         ->orderBy('date', 'desc')
         ->paginate(40);
       
   
    return view('requestBookSearch', compact('lifts')); 
  }

  public function delete(Lifterror $id)
  {
    $id->delete();
    return redirect('requestBook');
  }

}
