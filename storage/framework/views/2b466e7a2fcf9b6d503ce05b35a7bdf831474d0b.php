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

        <div class="action-buttons">
          <button type="button" class="round green" data-toggle="modal" data-target="#more">
            Добавить заявку
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
            Добавить ТО
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">
            Добавить доп. работы
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addWork">            
            Добавить задачу
          </button>
        </div>

        <div class="owl-carousel">
          <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div>
            <div class="card task-card">
              <img src= <?php echo e($task -> fotoTask); ?>  alt="Image task" class="image">
              <div class="description">
                <div class="date">
                  Дата: <?php echo e(Carbon\Carbon::parse($task->created_at)->format('d-m-y')); ?>

                </div>
                <div class="address">
                  Адрес: <?php echo e($task -> address); ?>-<?php echo e($task -> front); ?>-<?php echo e($task -> typeLift); ?>

                </div>               
                <div class="task">
                  Задача: <?php echo e($task -> task); ?>

                </div>
                <div class="assignee">
                  Добавил: <?php echo e($task -> human); ?>

                </div>
              </div>
                <form class="modal-form" method="post"  action="<?php echo e(route('taskUpdate')); ?>">
                  <input type="hidden" name='id' value="<?php echo e($task -> id); ?>"> 
                  <input type="hidden" name='condition' value="Выполнено"> 
                  <button type="submit" class="btn btn-primary">Выполнено</button>
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </div>        

        <div class="modal" id="add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Новое ТО</h4>
              </div>
              <div class="modal-body">
                <form id="add_form" class=" form drop-form" method="POST" action="<?php echo e('addChengeDetail'); ?>" >
                  
                  <?php echo $__env->make('form.home.addChengeDetail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo e(csrf_field()); ?>

                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="more">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Новая Заявка</h4>
              </div>
              <div class="modal-body">
                <form class="form" id="more_form" method="POST" action="<?php echo e(route('lifterrorStore')); ?>">
                  
                  <?php echo $__env->make('form.home.addLift', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo e(csrf_field()); ?>

                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="addTask">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Добавить Доп. работу</h4>
              </div>
              <div class="modal-body">
                <form id="add-task_form" class="form" method="POST" enctype="multipart/form-data" action="<?php echo e(route('additionalworkStore')); ?>">
                  
                  <?php echo $__env->make('form.home.addAdditionalwork', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo e(csrf_field()); ?>

                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="addWork">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Добавить Задачу</h4>
              </div>
              <div class="modal-body">
                <form class="form" method="POST" enctype="multipart/form-data" role="form"   action="<?php echo e(route('taskStore')); ?>">
                  
                  <?php echo $__env->make('form.home.addTask', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo e(csrf_field()); ?>

                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive-sm"> 
          <table class="table  table-hover" >
            <thead >
              <tr>  
                <th scope="col">Более 5 поломок за месяц</th>
                <th scope="col">Более 3 поломок за 15 дне</th>      
                <th scope="col">Более 2 поломок за 7 дней</th> 
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <ol>            
                    <?php $__currentLoopData = $liftReturns30_5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('searchLift',['date' => 31, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeLift); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ol>
                </td>
                <td>
                  <ol>            
                    <?php $__currentLoopData = $liftReturns30_5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('searchLift',['date' => 31, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeLift); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ol>
                </td>
                <td> 
                  <ol>
                    <?php $__currentLoopData = $liftReturns7_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a   href="<?php echo e(route('searchLift',['date' => 7, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift])); ?>"><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeLift); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ol>
                </td>
              </tr>
            </tbody>
          </table>       
        </div>

      <div class="row">
        <div class="tabs main-tabs">
          <ul class="nav nav-tabs" id="mainTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#stopped" role="tab" aria-controls="stopped" aria-selected="true">Остановлен</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="false">Еще не ходил</a>
            </li>            
          </ul>                        
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="stopped" role="tabpanel" aria-labelledby="stopped-tab">
              <ul id="notes" class="notes stopped">
                <?php $__currentLoopData = $liftsStop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
                <li class="col">
                  <p class="date">Дата заявки: <span><?php echo e(Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')); ?></span></p>
                  <p class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeLift); ?></span></p>
                  <p class="human">Автор: <span><?php echo e($lift -> human); ?></span></p>
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
                  <p class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeLift); ?></span></p>
                  <p class="human">Автор: <span><?php echo e($lift -> human); ?></span></p>
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
              <p class="sub-title">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeLift); ?></span></p>
              <p class="sub-title">Ошибка: <span><?php echo e($lift -> typeError); ?></span></p>
              <p class="sub-title">Заметка Механика: <span><?php echo e($lift -> notice); ?> <?php echo e($lift -> work); ?></span></p>
              <form class="modal-form" method="post"  action="<?php echo e(route('lifterrorUpdate')); ?>">
                    
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