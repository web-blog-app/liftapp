 

<?php $__env->startSection('content'); ?>

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">  
        <h2 class="text-info">Таблица выполненных заявок для каждого дома <span class="badge badge-warning"><?php echo e($countErrorAll); ?></span></h2>
        <div class="table-responsive-sm"> 
          <table class="table  table-hover" >
            <thead >
              <tr>  
                <th scope="col">Адрес</th>
                <th scope="col">Кол-во заявок</th>      
                <th scope="col">%</th> 
              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $countErrorLifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$countErrorLift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <?php $__currentLoopData = $countErrorLift; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$countError): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($key); ?></td>
                <td><?php echo e($countError); ?></td>
                <td><?php echo e(round(($countError/$countErrorAll)*100, 1)."%"); ?></td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>       
        </div>
        <h2 class="text-success">Таблица выполненных дополнительных работ</h2>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Работа</th>
              <th scope="col">Исполнитель</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $additionalWorks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalWork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e(Carbon\Carbon::parse($additionalWork -> created_at)->format('d-m ')); ?></td>
              <td><?php echo e($additionalWork -> additionalWorks); ?></td>
              <td><?php echo e($additionalWork -> humans); ?></td>
              <td>
                <form class="modal-form" method="post"  action="<?php echo e(route('additionalWorkUpdate')); ?>">
                  <input type="hidden" name='id' value="<?php echo e($additionalWork -> id); ?>"> 
                  <input type="hidden" name='pay' value="Оплачено"> 
                  <button type="submit" class="btn btn-primary">Оплачено</button>   
                  <?php echo e(csrf_field()); ?>

                </form>                 
              </td>
            </tr>                                   
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>