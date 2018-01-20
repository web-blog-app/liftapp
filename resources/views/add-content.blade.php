@extends('layout.site') 

@section('content')

<form method="POST" action="{{route('liftStore')}}">
<input type="date" name="Date" placeholder="Введите дату:" >
<input type="text" name="Address" placeholder="Введите адрес:">
<input type="text" name="Front" placeholder="Введите № парадной:">
<input type="text" name="TypeOfLift" placeholder="Введите вид лифта:" >
<input type="text" name="TypeOfError" placeholder="Номер шибки:">
<input type="text" name="Work" placeholder="Проделанная работа:" >
<input type="text" name="Notice" placeholder="Пометка механник:">
 <button type="submit">Отправить</button>
 {{csrf_field()}}
</form>

@endsection