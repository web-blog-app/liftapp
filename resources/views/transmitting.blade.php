@extends('layout.site') 
@extends('header')
@section('content')


<div class="card card-body tab-pane">
<form class="drop-form" method="POST" action="{{'addChengeDetail'}}">
 <div class="form-group">
  <select class="form-control" size="1" name="address" required="">
     <option value="" selected="" disabled="">Адрес дома:</option>
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
  <div class="form-group">
   <select class="form-control" size="1" name="front" required="">
    <option selected="" disabled=""> № парадной:</option>
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
 <div class="form-group">
 <select class="form-control" size="1" name="typeOfLift" required="">
   <option value="" selected="" disabled="">Вид лифта:</option>
   <option value="пасс.">Пассажирский</option>
   <option value="груз.">Грузовой</option>
   <option value="пож.">Пожарный</option>
   <option value="лев_груз.">Левый грузовой</option>
   <option value="прав_груз">Правый грузовой</option>
 </select>
</div>
<div class="form-group">
<input class="form-control" type="text" name="detail" placeholder="Проделанная работа:" required="">
</div>
<div class="form-group">
<input class="form-control" type="text" name="notice" placeholder="Пометка механика:">
</div>
<div class="form-group">
<button class=" btn color_but_blue" type="submit">
Отправить
</button>
</div>  
{{csrf_field()}}
</form>
 </div>

@endsection


