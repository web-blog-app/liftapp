@extends('layout.site')

@section('content')

<h1>hello {{ Auth::user()->name }} </h1>
<h1>hello {{ Auth::user()->email }} </h1>
<h1>hello {{ Auth::user()->avatar }} </h1>
Количество закрытых заявок: 155
Кол-во застреваний: 23
приписанные дома 4




@endsection