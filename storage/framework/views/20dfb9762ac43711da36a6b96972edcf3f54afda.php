 

<?php $__env->startSection('content'); ?>

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">
        <p>
          <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Поиск по базе</button>      
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <form class="drop-form" method="get" action="<?php echo e(route('search')); ?>">
                
                <?php echo $__env->make('form.request.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo e(csrf_field()); ?>

              </form>
            </div>
          </div>
        </div>          
               
        <div class="table-responsive-sm">
          <table class="table  table-hover" >
            <thead >
              <tr>
                <th scope="col">Дата</th>
                <th scope="col">Адрес</th>
                <th scope="col">Ошибка</th> 
                <th class="hide-note" scope="col">Этаж</th> 
                <th class="hide-note" scope="col">Вид заявки</th> 
                <th class="hide-note" scope="col">Заметка механика</th> 
                <th scope="col">Проделанная работа</th> 
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $lifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(Carbon\Carbon::parse($lift ->date )->format('d-m')); ?></td>
                <td><?php echo e($lift ->address); ?>-<?php echo e($lift ->front); ?>-<?php echo e($lift ->typeOfLift); ?></td>    
                <td><?php echo e($lift ->typeOfError); ?></td>
                <td class="hide-note"><?php echo e($lift ->notice); ?></td>
                <td ><?php echo e($lift ->work); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <?php echo e($lifts->links()); ?>

      </div>
    </div>
  </div>     
</div>

<?php $__env->stopSection(); ?>
  


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>