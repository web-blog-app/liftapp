@extends('layout.site') 

@section('content')

<form method="POST" action="{{route('liftStore')}}">
<input type="date" name="Date" placeholder="Введите дату:" >

<select size="1"  name="Address">
    <option selected disabled>Выберите адрес дома:</option>
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

<select size="1"  name="Front">
    <option selected disabled>Выберите № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>  
</select>
<select size="1"  name="TypeOfLift">
    <option selected disabled>Выберите вид лифта:</option>
    <option value="Пассажирский">Пассажирский</option>    
    <option value="Грузовой">Грузовой</option>
    <option value="Пожарный">Пожарный</option>
    <option value="Грузовой">Левый грузовой</option>
    <option value="Грузовой">Правый грузовой</option>
   </select>

<input type="text" name="TypeOfError" placeholder="Номер шибки:">
<input type="text" name="Work" placeholder="Проделанная работа:" >
<input type="text" name="Notice" placeholder="Пометка механник:">
 <button type="submit">Отправить</button>
 {{csrf_field()}}
</form>

@endsection