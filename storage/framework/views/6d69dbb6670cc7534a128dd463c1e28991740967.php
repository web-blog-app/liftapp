<?php $__env->startSection('content'); ?>

<?php if(Session::has('status')): ?> 
<div class="alert alert-success alert-dismissible fade show"  role="alert">
  <?php echo e(Session::get('status')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<div class="content main-content">
  <div class="layer">
    <div class="container">
      <div class="row"> 
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active ">
              <div class="card bg-dark text-white" >
                <img class="card-img col-12" src="img/mex_lift.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <h2 class="card-title">Текущие задачи!</h2>
                  <h5 class="card-text">Задачи которые необходимо выполнить в ближайшее время или все пойдет прахом.</h5>
                  <h5 class="card-text">Увидел неиправность которую нужно исправить, но не срочно.  Сфотографируй и отправь в задачи.</h5>
                </div>
              </div>
            </div>  
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item ">
              <div class="card text-white ">
                  <img class="card-img" src="img/mex_lift.jpg" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h2 class="card-title">Дата задачи: <?php echo e(Carbon\Carbon::parse($task->created_at)->format('d-m-y')); ?></h2>
                    <h5 class="card-text">Что сделать: <?php echo e($task -> task); ?></h5>
                    <form class="modal-form" method="post"  action="<?php echo e(route('taskUpdate')); ?>">
                      <input type="hidden" name='id' value="<?php echo e($task -> id); ?>"> 
                      <input type="hidden" name='condition' value="Выполнено"> 
                      <button type="submit" class="btn btn-primary">Выполнено</button>
                      <?php echo e(csrf_field()); ?>

                    </form>
                  </div>
                </div>                    
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
        <div class="tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">                            
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Добавить заявку</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="more-tab" data-toggle="tab" href="#more" role="tab" aria-controls="more" aria-selected="false">Добавить ТО</a>
            </li>                           
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addTask" role="tab" aria-controls="addTask" aria-selected="false">Добавить задачу</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addWork" role="tab" aria-controls="addWork" aria-selected="false">Добавить доп. работы</a>
            </li>
          </ul>                                 
          <div class="tab-content" id="myTabContent"> 
            <div class="tab-pane fade scroll-table" id="more" role="tabpanel" aria-labelledby="more-tab">
                <div class="card card-body">
                  <form class=" form drop-form" method="POST" action="<?php echo e('addChengeDetail'); ?>" >
                    
                    <?php echo $__env->make('form.home.addChengeDetail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo e(csrf_field()); ?>

                  </form>
                </div>                                  
            </div>
            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="contact-tab">
             <?php if($errors->any()): ?>
                <ul class="alert alert-danger">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              <?php endif; ?>
              <form class="form" method="POST" action="<?php echo e(route('liftStore')); ?>">
                
                <?php echo $__env->make('form.home.addLift', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                                    
                <?php echo e(csrf_field()); ?>

              </form>
            </div>
            <div class="tab-pane fade   scroll-table" id="addTask" role="tabpanel" aria-labelledby="important-tab">
              <form class="form" method="POST" enctype="multipart/form-data" action="<?php echo e(route('addTask')); ?>">
                
                <?php echo $__env->make('form.home.addTask', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                                    
                <?php echo e(csrf_field()); ?>

              </form>
            </div>
            <div class="tab-pane fade scroll-table" id="addWork" role="tabpanel" aria-labelledby="more-tab">
              <form class="form" method="POST" action="<?php echo e(route('addАdditionalWork')); ?>">
                
                <?php echo $__env->make('form.home.addAdditionalWork', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo e(csrf_field()); ?>

              </form>   
             </div>        
          </div>
        </div>
      </div>

      <div id="accordion">
        <div class="card text-danger ">
          <div class="card-header " id="headingOne">
            <h5 class="mb-0  ">
              <button class="btn btn-link  " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Более 5 поломок за месяц
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <ol>            
              <?php $__currentLoopData = $liftReturns30_5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('search',['date' => 31, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeOfLift); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ol>
             </div>
          </div>
        </div>
        <div class="card text-danger">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Более 3 поломок за 15 дней
              </button>
            </h5>
          </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <ol>
              <?php $__currentLoopData = $liftReturns16_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('search',['date' => 16, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeOfLift); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </div>
        </div>
        </div>
        <div class="card text-danger">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Более 2 поломок за неделю
              </button>
            </h5>
          </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <ol>
              <?php $__currentLoopData = $liftReturns7_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a   href="<?php echo e(route('search',['date' => 7, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeOfLift); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </div>
        </div>
        </div>
      </div>
      
      <div class="row">
        <div class="tabs main-tabs">
          <ul class="nav nav-tabs" id="mainTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#stopped" role="tab" aria-controls="stopped" aria-selected="true">Остановлен</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="false">Текущее</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#someday" role="tab" aria-controls="someday" aria-selected="false">Отложено</a>
            </li>
          </ul>                        
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="stopped" role="tabpanel" aria-labelledby="stopped-tab">
              <ul id="notes" class="notes stopped">
								<?php $__currentLoopData = $liftsStop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>											
                <li class="col">
                  <p class="date">Дата заявки: <span><?php echo e(Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')); ?></span></p>
                  <p class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeOfLift); ?></span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-<?php echo e($lift -> id); ?>">Подробнее</button>
                </li>                             
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </ul>
            </div>
            <div class="tab-pane fade" id="current" role="tabpanel" aria-labelledby="profile-tab">
              <ul id="notes" class="notes current">
                <?php $__currentLoopData = $liftsTime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col">
                  <p class="date">Дата заявки: <span><?php echo e(Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')); ?></span></p>
                  <p class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeOfLift); ?></span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-<?php echo e($lift -> id); ?>">Подробнее</button>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </ul>
            </div>
            <div class="tab-pane fade" id="someday" role="tabpanel" aria-labelledby="someday-tab">
              <ul id="notes" class="notes someday">
                <?php $__currentLoopData = $lifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col">
                  <p class="date">Дата заявки: <span><?php echo e(Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')); ?></span></p>
                  <p class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeOfLift); ?></span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-<?php echo e($lift -> id); ?>">Подробнее</button>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
 
<?php $__currentLoopData = $liftAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<div class="modals">	                        
  <div class="modal fade" id="stopped-<?php echo e($lift -> id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Информация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p class="sub-title">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeOfLift); ?></span></p>
              <p class="sub-title">Ошибка: <span><?php echo e($lift -> typeOfError); ?></span></p>
              <p class="sub-title">Заметка Механика: <span><?php echo e($lift -> notice); ?></span></p>
              <form class="modal-form" method="post"  action="<?php echo e(route('workUpdate')); ?>">
                    
                    <?php echo $__env->make('form.home.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                 
                    <?php echo e(csrf_field()); ?>

              </form>
            </div>
        </div>
    </div>
</div>   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>