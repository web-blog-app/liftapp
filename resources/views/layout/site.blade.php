<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>макет Я</title>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

<style>
	.table_dark {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 12px;
  width: 100%;
  
  border-collapse: collapse;
  background: #252F48;
  margin: 5px;
}
.table_dark th {
  color: #EDB749;  
  padding: 10px 10px;
  text-align: center;

}
.table_dark td {
  color: #CAD4D6;
  border-top: 2px solid #37B5A5;
  border-bottom: 1px solid #37B5A5;
  border-right:1px solid #37B5A5;
  padding: 7px 17px;
}

</style>
</head>
<body>

@section('header')	
Здесь будет панель навигации, логотип и еще какая-нибудь фигня
@show

@section('search')
<form method="get" action="{{route('search')}}">

<input type="date" name="Date" placeholder="Дата:" ><!--  календарь красивый через js -->
<input type="date" name="Date1" placeholder="Дата:" >
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
   </select>
 <button type="submit">Поиск</button>
 {{csrf_field()}}
</form>
@show



@yield('content')


@section('footer')	
Здесь будет панель футер
@show


</body>
</html>