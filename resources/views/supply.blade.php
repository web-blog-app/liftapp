@extends('layout.site') 
@extends('header')
@section('content')

{{dump(Auth::user())}}  



@endsection