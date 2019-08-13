<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="cd0151d39d4baf0c" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#e31e25">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png')}}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico')}}">  

    <title>{{ setting('site.title') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/main.css')}}" type="text/css"> 
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css')}}" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>  

    @include('kit.header')      
 
    @yield('content')

    @include('kit.footer')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>