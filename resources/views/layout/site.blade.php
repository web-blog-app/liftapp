<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Master</title>
	<link href="css/app.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('css/main.css') }}">
 <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">    
 <link rel="stylesheet" href="{{ asset('css/ap.css') }}">
<!-- календарь--> 
 <link rel="stylesheet" href="{{ asset('css/tcal.css') }}">
<!-- переключатель меню--> 
 <link rel="stylesheet" href="{{ asset('css/toggleMenu.css') }}">
 <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}">

</head>
<body>
<header>
<div class="container-fluid">
<div class="row justify-content-end">
	<div class="col-md-3 col-sm-2">
    <img src="elevator.png" alt="Elevator" class="logo">
	</div>
	<div class="col-md-9 col-sm-10">
      <nav>
        <ul class=" menu row">
          <li class="col-md-2 col-sm-2">
            <a class="active" href="/laravel/public/">
            <i class="fa fa-bell fa-lg" aria-hidden="true"></i>
          текущие дела
        </a>
      </li>
          <li class="col-md-2 col-sm-2">
          <a href="/laravel/public/requestBook">
            <i class="fa fa-book fa-lg" aria-hidden="true"></i>
           книга заявок
          </a>
        </li>
          <li class="col-md-3 col-sm-3">
            <a href="/laravel/public/detail">
              <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
            необходимые детали
          </a>
        </li>
          <li class="col-md-2 col-sm-3">
            <a href="/laravel/public/changeDetail">              
              <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
            замена деталей
          </a>
        </li>          
        </ul>
      </nav>
  </div>
</div>
</div> 
	<button class="toggle-menu">
      <span class="sandwich">
      <span class="sw-topper"></span>
      <span class="sw-bottom"></span>
      <span class="sw-footer"></span>
      </span>
	</button>

<div class="top-menu">
<ul>
  <li><a href="/laravel/public/">
    <i class="fa fa-book fa-lg" aria-hidden="true"></i>
  текущие дела
</a>
</li>
  <li><a href="/laravel/public/requestBook">
    <i class="fa fa-book fa-lg" aria-hidden="true"></i>
  книга заявок
    </a>
    </li>
  <li>
    <a href="/laravel/public/detail">
     <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
      необходимые детали
    </a>
  </li>
  <li>
    <a href="/laravel/public/changeDetail">
     <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
    замена деталей
  </a>
</li>
</ul>      
</div>
</div>
</header>
 <div class="content">
    <div class="container">

      @yield('content')

    </div>
  </div>
<footer>
  
  <div class="row">
    <div class="col-sm-12">
    <div class="footer_text">   
  		<p>2018 - ООО "ЕНТО". Все права защищены.</p>
	  </div>
  </div>	
  </div> 
  
</footer>



 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/common.js') }}"></script>
 <script src="{{ asset('js/tcal.js') }}"></script>
</body>
</html>