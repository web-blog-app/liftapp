
  
  <header class="header">
    <div class="container">
        <div class="row">
            
            <div class="login-menu menu">
                <div class="navbar-brand"><img class="logo" src="img/lift.png" alt="LiftBook"><?php echo e(setting('site.title')); ?></div>

                <div class="user-container dropdown">

                    <img class="user" src="img/default.png" alt="">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       <?php echo e(Auth::user()->name); ?> 
                        </a>
                         <ul class="dropdown-menu" role="menu">

        <?php if(Auth::user()->role_id == '1'): ?>
            <li>
                  <a href="/liftapp/public/admin">Administrator</a>
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

                <div class="menu-items">
                     
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>" class="fadeInUp animated">
                                <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                                текущие заявки
                                <span></span></a>
                        </li>
                        <li><a href="/liftapp/public/requestBook" class="fadeInUp animated">
                                <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                                журнал заявок
                                <span></span></a>
                        </li>
                        <li>
                            <a href="/liftapp/public/detail" class="fadeInUp animated">
                                <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
                                заказ запчастей
                                <span></span></a>
                        </li>
                        <li>
                            <a href="/liftapp/public/changeDetail" class="fadeInUp animated">
                                <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                                тех. обслуживание
                                <span></span></a>
                        </li>
                        <li>
                            <a href="/liftapp/public/info" class="fadeInUp animated">
                                <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                                информация
                                <span></span></a>
                        </li>                        
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
                    <li><a href="/public" class="fadeInUp animated">
                            <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                            текущие заявки
                            <span></span></a>
                    </li>
                    <li><a href="/public/requestBook" class="fadeInUp animated">
                            <i class="fa fa-book fa-lg" aria-hidden="true"></i>
                            журнал заявок
                            <span></span></a>
                    </li>
                    <li>
                        <a href="/public/detail" class="fadeInUp animated">
                            <i class="fa fa-microchip fa-lg" aria-hidden="true"></i>
                            заказ запчастей
                            <span></span></a>
                    </li>
                    <li>
                        <a href="/public/changeDetail" class="fadeInUp animated">
                            <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                            тех. обслуживание
                            <span></span></a>
                    </li>
                      <li>
                            <a href="/liftapp/public/info" class="fadeInUp animated">
                                <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                                информация
                                <span></span></a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</header>
