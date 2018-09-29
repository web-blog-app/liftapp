<?php $__env->startSection('header'); ?>

      <header class="header">
    <div class="container">
        <div class="row">
            <div class="login-menu menu">
                <div class="navbar-brand"><img class="logo" src="img/lift.png" alt="LiftBook"><?php echo e(setting('site.title')); ?></div>
                <div class="menu-items">
                    <ul>
                    	 <?php if(Auth::guest()): ?>
                        <li><a  class="login">Войти</a></li>
                        <li><a class="registr">Зарегистрироваться</a></li>
                       <?php endif; ?>
                    </ul>
                </div>
            </div>

            <button class="toggle-menu">
              <span class="sandwich">
                  <span class="sw-topper"></span>
                  <span class="sw-bottom"></span>
                  <span class="sw-footer"></span>
              </span>
            </button>
            <div class="top-menu" style="display: none;">
                <ul>
                   <?php if(Auth::guest()): ?>
                        <li><a   class="login">Войти</a></li>
                        <li><a class="registr">Зарегистрироваться</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div class="content login-content">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="login-box">
                        <form method="POST" action="<?php echo e(route('login')); ?>">

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="exampleInputEmail1">Ваш Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required placeholder="Введите email">
                                <small id="emailHelp" class="form-text text-muted">Ваш Email не будет доступен кому-либо ещё</small>
                                 <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Пароль">
                                  <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Запомнить меня
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Войти</button>
                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Забыл пароль?
                                </a>
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                    <div class="registr-box">
                        <form method="POST" action="<?php echo e(route('register')); ?>">

                        	  <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="registrInputName1">Имя</label>
                                <input for="registrInputName1" class="form-control" id="registrInputName1"  name="name" value="<?php echo e(old('name')); ?>" required  placeholder="Введите имя">
                                  <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="registrInputEmail1">Ваш Email</label>
                                <input name="email" value="<?php echo e(old('email')); ?>" required type="email" class="form-control" id="registrInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                                <small id="emailHelp" class="form-text text-muted">Ваш Email не будет доступен кому-либо ещё</small>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="newInputPassword1">Пароль</label>
                                <input type="password" class="form-control" id="newInputPassword1" placeholder="Пароль" name="password" required>
                                 <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="repeatInputPassword1">Повторите пароль</label>
                                <input type="password" class="form-control" id="repeatInputPassword1" name="password_confirmation" required placeholder="Пароль ещё раз">
                            </div>

                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                               <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                    
                
     
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>