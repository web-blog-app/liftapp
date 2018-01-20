
@extends('layout.site') 

@yield('searsh')


@section('content')


<table class="table_dark">
<tr><th colspan="5">Таблица заявок.</th></tr>
<tr>
  <td>Дата поломки</td>
  <td>Адрес дома</td>
  <td>№ парадной</td>
  <td>Тип лифта</td>
  <td>Номер ошибки</td>
  <td>Проделанная работа</td>
  <td>Примечания</td>
 </tr>
@foreach($lifts as $lift)
 <tr>
  <td>{{$lift -> Date}}</td>
  <td>{{$lift -> Address}}</td>
  <td>{{$lift -> Front}}</td>
  <td>{{$lift -> TypeOfLift}}</td>  
  <td>{{$lift -> TypeOfError}}</td>
  <td>{{$lift -> Work}}</td>
  <td>{{$lift -> Notice}}</td>
 </tr>
@endforeach
 </table>

@endsection


