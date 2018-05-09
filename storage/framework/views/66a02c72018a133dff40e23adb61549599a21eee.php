<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title><?php echo e(setting('site.title')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/log.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>">
     <link rel="shortcut icon" href="<?php echo e(asset('img/favicon/favicon.ico')); ?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                   
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="logo " >
                        <img src="img/elevator1.png" alt="LiftApp">
                        <span><?php echo e(setting('site.title')); ?></span>
                        
                    </div>
                </div>

                <div class=" collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class=" top_line nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                Вход
                            </a></li>
                            <li><a href="<?php echo e(route('register')); ?>">
                               <i class="fa fa-user-o" aria-hidden="true"></i>
                                Регистрация</a></li>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
