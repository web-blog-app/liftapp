<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="cd0151d39d4baf0c" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/favicon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/favicon/favicon-32x32.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('img/favicon/site.webmanifest')); ?>">
    <link rel="mask-icon" href="<?php echo e(asset('img/favicon/safari-pinned-tab.svg')); ?>" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>">
  <meta name="theme-color" content="#e31e25">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(setting('site.title')); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
 
  <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/fullcalendar.css')); ?>">
  <link rel="shortcut icon" href="favicon.ico">
  

</head>
<body>
    
       <?php echo $__env->yieldContent('header'); ?>
 

       <?php echo $__env->yieldContent('content'); ?>
       
 <footer class="footer">

    <div class="container">
        <div class="row">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="img/as.svg" alt="A&S">
                    Студия A&S 2018
                </div>
                <div class="footer-info">
                    Сервис обслуживания и ремонта лифтов
                </div>
            </div>
        </div>
    </div>

</footer>
 

<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>