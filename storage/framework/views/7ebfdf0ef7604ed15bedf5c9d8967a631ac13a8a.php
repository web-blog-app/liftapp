<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="yandex-verification" content="cd0151d39d4baf0c" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(setting('site.title')); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">  
    <link rel="shortcut icon" href="favicon.ico">
  

</head>
<body>
    <?php echo $__env->yieldContent('header'); ?>      
 
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('kit.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>      
 

<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>