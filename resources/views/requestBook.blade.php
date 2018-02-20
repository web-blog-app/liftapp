@extends('layout.site') 

@section('content')
<div class="container">
<div class="wrapper_open">
<button  type="button" class=" btn color_but_blue btn_open">Поиск по базе данных</button> 
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
<select class="form-control"  size="1"  name="address">
    <option selected disabled>Адрес дома:</option>
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
</select>
</div>
<div class="col-sm-2">  
<select class="form-control"  size="1"  name="typeOfLift">
    <option selected disabled>Тип лифта:</option>
    <option value="Пассажирский">Пассажирский</option>    
    <option value="Грузовой">Грузовой</option>
    <option value="Пожарный">Пожарный</option>
   </select>
   </div>
   <div class="col-sm-2">
 <button class="btn color_but_red" type="submit">Поиск</button>
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
      <th scope="col">Дата поломки</th>
      <th scope="col">Адрес дома-№пар.</th>      
      <th scope="col">Тип лифта</th>
      <th scope="col">Номер ошибки</th>
      <th scope="col">Записки механика</th>
      <th scope="col">Проделанная работа</th>      
    </tr>
  </thead>
  <tbody>
    @foreach($lifts as $lift)
    <tr>
      <td>{{$lift ->date}}</td>
      <td>{{$lift ->address}}-{{$lift ->front}}</td> 
      <td>{{$lift ->typeOfLift}}</td>  
      <td>{{$lift ->typeOfError}}</td>  
      <td>{{$lift ->notice}}</td>
      <td class="workM">{{$lift ->work}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
 </div>
 </div> 

</div>
</div>
@endsection

