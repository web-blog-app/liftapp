@extends('layout.site') 

@section('content')
<div class="container">

<div class="wrapper_open">
<button  type="button" class=" btn color_but_blue btn_open">Добавить замену деталей</button>
<form class="form_hidden" method="POST" action="{{'addChengeDetail'}}">
  <div class="row">
  <div class="col-sm-6 col-md-2 ">
<select class="form-control form-control-sm" size="1"   name="address" required>
    <option value=''  selected disabled>Адрес:</option>
    <option value="Оптиков 45">Оптиков 45</option>    
    <option value="Оптиков 49">Оптиков 49</option>
    <option value="Оптиков 50">Оптиков 50</option>
    <option value="Оптиков 52">Оптиков 52</option>
    <option value="Туристская 11">Туристская 11</option>
    <option value="Туристская 15">Туристская 15</option>
    <option value="Туристская 18">Туристская 18</option>
    <option value="Туристская 28">Туристская 28</option>
    <option value="Туристская Лыжная 3">Лыжная 3</option>
    <option value="Туристская Лыжная 4">Лыжная 4</option>
    <option value="Туристская Лыжная 10">Лыжная 10</option>
</select>
</div>
<div class="col-sm-6 col-md-2 ">
<select class="form-control form-control-sm" size="1"  name="front" required>
    <option value=''  selected disabled> № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>  
</select>
</div>
<div class="col-sm-6 col-md-2 ">
<select class="form-control form-control-sm" size="1"   name="typeOfLift" required>
    <option value=''  selected disabled>Тип лифта:</option>
    <option value="Пассажирский">Пассажирский</option>    
    <option value="Грузовой">Грузовой</option>
    <option value="Пожарный">Пожарный</option>
    <option value="Грузовой">Левый грузовой</option>
    <option value="Грузовой">Правый грузовой</option>
   </select>
</div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="detail" placeholder="Проделанная работа:" required >
</div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="notice" placeholder="Пометка механика:">
</div>
<div class="col-sm-12 col-md-2 ">
 <button class=" btn color_but_red" type="submit">Отправить</button>
 </div>
 {{csrf_field()}}
 </div>
</form>
</div>
</div>

<div class="container">  
<div class="table-responsive-sm">
<table class="table  table-hover" >
  <thead >
    <tr>
      <th scope="col">Дата замены</th>
      <th scope="col">Адрес дома-№пар.</th>      
      <th scope="col">Тип лифта</th>
      <th scope="col">Работа</th>       
      <th scope="col">Записки механика</th>          
    </tr>
  </thead>
  <tbody>
@foreach($details as $detail)
 <tr>
  <td>{{$detail ->date}}</td>
  <td>{{$detail ->address}}-{{$detail ->front}}</td> 
  <td>{{$detail ->typeOfLift}}</td>   
  <td>{{$detail ->detail}}</td>
  <td>{{$detail ->notice}}</td>
 </tr>
@endforeach
 </table>
</div>
</div>
@endsection

