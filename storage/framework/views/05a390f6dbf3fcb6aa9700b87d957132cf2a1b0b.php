<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(setting('site.title')); ?></title>

  
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" >
  <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">    
  <link rel="stylesheet" href="<?php echo e(asset('css/ap.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/media.css')); ?>">
<!-- календарь--> 
  <link rel="stylesheet" href="<?php echo e(asset('css/tcal.css')); ?>">
<!-- переключатель меню--> 
  <link rel="stylesheet" href="<?php echo e(asset('css/toggleMenu.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>">

</head>
<body>
<header>
  <div class="container-fluid">
  <div class="row justify-content-end">
	<div class="col-md-2 col-sm-2">
    <img src="elevator.png" alt="Elevator" class="logo">    
	</div>
  

	<div class="col-md-7 col-sm-6 menu">
      <nav >
        <ul class="row">
          <li class="col-md-2 col-sm-1">
            <a class="active" href="/laravel/public/">
            <i class="fa fa-bell fa-lg" aria-hidden="true"></i>
          Текущее
        </a>
      </li>
          <li class="col-md-2 col-sm-1">
          <a href="/laravel/public/requestBook">
            <i class="fa fa-book fa-lg" aria-hidden="true"></i>
           журнал 
          </a>
        </li>
          <li class="col-md-2 col-sm-2">
            <a href="/laravel/public/detail">
              <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
            запчасти
          </a>
        </li>
          <li class="col-md-2 col-sm-2">
            <a href="/laravel/public/changeDetail">              
              <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
            то
          </a>              
              </li>                                   
        </ul>
      </nav>
      
  </div>

  <div class="col-md-3  col-sm-4 dropdown">
<img src="storage/<?php echo e(Auth::user()->avatar); ?>"   alt="avatar">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
       <?php echo e(Auth::user()->name); ?> 
       <span class="caret"></span>                                 
     </a>

        <ul class="dropdown-menu" role="menu">

          <?php if(  Auth::user()->name == 'Admin'): ?>
           <li>
                  <a href="/laravel/public/admin">
                    Панель администратора
                  </a>
            </li>
            <?php endif; ?>

          <li>
            <a href="<?php echo e(route('logout')); ?>"
             onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Выйти
                </a>

                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                  </form>
                </li>

                </ul>
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
  текущиее 
</a>
</li>
  <li><a href="/laravel/public/requestBook">
    <i class="fa fa-book fa-lg" aria-hidden="true"></i>
  журнал 
    </a>
    </li>
  <li>
    <a href="/laravel/public/detail">
     <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
     запчасти
    </a>
  </li>
  <li>
    <a href="/laravel/public/changeDetail">
     <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
     тех. обслуживание
  </a>
</li>
</ul>      
</div>


</div>

</header>
<main> 
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
    


</main>
<footer>  
  <div class="row">
    <div class="col-sm-12">
    <div class="footer_text">   
  		<p>2018 - ООО "ЕНТО". Все права защищены.</p>
	  </div>
  </div>	
  </div>   
</footer>
 
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="<?php echo e(asset('js/common.js')); ?>"></script>
<script src="<?php echo e(asset('js/tcal.js')); ?>"></script>
</body>
</html>