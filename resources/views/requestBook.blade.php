@extends('layout.site') 

@section('content')

<div class="main_table">
<div class="wrapper_open">
<button  type="button" class=" btn color_but_red btn_open">
  <i class="fa fa-search" aria-hidden="true"></i>
Поиск по базе данных
</button> 
<form class="form_hidden" method="post" action="{{route('search')}}">
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
<select class="form-control"  size="1"  name="front">
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
    <option selected disabled>Тип лифта:</option>
    <option value="Пасс.">Пассажирский</option>    
    <option value="Груз.">Грузовой</option>
    <option value="Пож.">Пожарный</option>
    <option value="Лев_груз.">Левый грузовой</option>
    <option value="Прав_груз.">Правый грузовой</option>
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

<div class="table-responsive-sm " >
<table class="table  table-hover" >
  <thead >
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Адрес</th>         
      <th scope="col">Ошибка</th>
      <th class="notice" scope="col">Заметка</th>
      <th scope="col">Работа</th>      
    </tr>
  </thead>
  <tbody>
    @foreach($lifts as $lift)
    <tr>
      <td class="data">{{ Carbon\Carbon::parse($lift ->date)->format('d.m.Y ')}}</td>
      <td class="address">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</td>      
      <td class=typeError>{{$lift ->typeOfError}}</td>  
      <td class="notice">{{$lift ->notice}}</td>
      <td class="workM">{{$lift ->work}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
 </div>
  {{$lifts->links()}}

 </div> 
</div>


@endsection

