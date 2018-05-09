@extends('layout.site') 

@section('content')
<div class="main_table">
<div id="accordion">
  
  <div class="card">
    <div class="card-header" id="headingOne">      
        <button class="btn color_but_red" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>       
          Добавить ТО:     
        </button>     
    </div>

  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
  <div class="card-body">
<form  method="POST" action="{{'addChengeDetail'}}">
  <div class="row">
  <div class="col-sm-6 col-md-2 ">
  <select class="form-control form-control-sm" size="1" name="address" required>
      <option value="" selected disabled>Адрес дома:</option>
      <option value="Оптиков 45 к1">Оптиков 45 к1</option>
      <option value="Оптиков 45 к2">Оптиков 45 к2</option>      
      <option value="Оптиков 49">Оптиков 49</option>
      <option value="Оптиков 50">Оптиков 50</option>
      <option value="Оптиков 52">Оптиков 52</option>
      <option value="Туристская 11">Туристская 11</option>
      <option value="Туристская 15">Туристская 15</option>
      <option value="Туристская 18">Туристская 18</option>
      <option value="Туристская 28">Туристская 28</option>
      <option value="Лыжная 3">Лыжная 3</option>
      <option value="Лыжная 4">Лыжная 4</option>
      <option value="Лыжная 10">Лыжная 10</option>
      <option value="Мебельная 19">Мебельная 19</option>
  </select>
</div>
<div class="col-sm-6 col-md-2 ">
  <select class="form-control form-control-sm" size="1"  name="front" required>
    <option selected disabled> № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>
    <option value="9">9 парадная</option>
    <option value="10">10 парадная</option>
    <option value="11">11 парадная</option>  
    </select>
</div>
<div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="typeOfLift" required>
      <option value="" selected disabled>Вид лифта:</option>
      <option value="пасс.">Пассажирский</option>    
      <option value="груз.">Грузовой</option>
      <option value="пож.">Пожарный</option>
      <option value="лев_груз.">Левый грузовой</option>
      <option value="прав_груз">Правый грузовой</option>
    </select>
 </div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="detail" placeholder="Проделанная работа:" required >
</div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="notice" placeholder="Пометка механика:">
</div>
<div class="col-sm-12 col-md-2 ">
 <button class=" btn color_but_blue" type="submit">
    <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
 Отправить
</button>
 </div>
 {{csrf_field()}}
 </div>
</form>      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      
        <button class="btn color_but_red collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fa fa-search" aria-hidden="true"></i>
          Поиск 
        </button>
   
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <form  method="get" action="{{route('searchChengeDetail')}}">
<div class="row">
  <div class="col-sm-2">
<select  class="form-control"  size="1" name="date">
    <option value="month">Месяц</option>
    <option value="week">Неделя</option>  
    <option value="year">Год</option>
</select>
</div>
<div class="col-sm-2">
  <select class="form-control form-control-sm" size="1" name="address" required>
    <option value="" selected disabled>Адрес дома:</option>
    <option value="Оптиков 45 к1">Оптиков 45 к1</option>
    <option value="Оптиков 45 к2">Оптиков 45 к2</option>      
    <option value="Оптиков 49">Оптиков 49</option>
    <option value="Оптиков 50">Оптиков 50</option>
    <option value="Оптиков 52">Оптиков 52</option>
    <option value="Туристская 11">Туристская 11</option>
    <option value="Туристская 15">Туристская 15</option>
    <option value="Туристская 18">Туристская 18</option>
    <option value="Туристская 28">Туристская 28</option>
    <option value="Лыжная 3">Лыжная 3</option>
    <option value="Лыжная 4">Лыжная 4</option>
    <option value="Лыжная 10">Лыжная 10</option>
    <option value="Мебельная 19">Мебельная 19</option>
    </select>
</div>
<div class="col-sm-2">  
  <select class="form-control form-control-sm" size="1"  name="front" required>
    <option selected disabled> № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>
    <option value="9">9 парадная</option>
    <option value="10">10 парадная</option>
    <option value="11">11 парадная</option>  
  </select>
</div>
<div class="col-sm-2">  
<select class="form-control"  size="1"  name="typeOfLift">   
      <option value="" selected disabled>Вид лифта:</option>
      <option value="пасс.">Пассажирский</option>    
      <option value="груз.">Грузовой</option>
      <option value="пож.">Пожарный</option>
      <option value="лев_груз.">Левый грузовой</option>
      <option value="прав_груз">Правый грузовой</option>
    </select>
   </div>
   <div class="col-sm-2">
 <button class="btn color_but_blue" type="submit">
    <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
 Поиск
</button>
 {{csrf_field()}}
 </div>
</form>
      </div>
    </div>
  </div>
  
  </div>
</div>




 
<div class="table-responsive-sm">
<table class="table  table-hover" >
  <thead >
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Адрес</th>       
      <th scope="col">Проделанная работа</th>       
      <th class="notice" scope="col">Записки механика</th>          
    </tr>
  </thead>
  <tbody>
@foreach($details as $detail)
 <tr>
  <td>{{ Carbon\Carbon::parse($detail ->date )->format('d-m-Y ')}}</td>
  <td>{{$detail ->address}}-{{$detail ->front}}-{{$detail ->typeOfLift}}</td>    
  <td>{{$detail ->detail}}</td>
  <td class="notice">{{$detail ->notice}}</td>
 </tr>
@endforeach
 </table>
 {{$details->links()}}
</div>
</div>
@endsection

