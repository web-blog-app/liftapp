 

<?php $__env->startSection('content'); ?>

<?php if(Session::has('status')): ?> 
<div class="alert alert-success alert-dismissible fade show"  role="alert">
  <?php echo e(Session::get('status')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php endif; ?>

 <div class="content to-content">
        <div class="container">         

            <div class="row">
                <div class="drop-container">
                    <p>
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse-toSearch" aria-expanded="false" aria-controls="collapse-toSearch">
                            Поиск
                        </button>
                    </p>
                    <div class="collapse" id="collapse-toSearch">
                        <div class="card card-body">
                            <form class="drop-form"  method="get" action="<?php echo e(route('searchChengeDetail')); ?>">

                                <div class="form-group">
                                    <select class="form-control" size="1" name="date">
                                        <option value="month">Месяц</option>
                                        <option value="week">Неделя</option>
                                        <option value="year">Год</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" size="1" name="address" required="">
                                        <option value="" selected="" disabled="">Адрес дома:</option>
                                        <option value="Оптиков 45 к1">Оптиков 45 к1</option>
                                        <option value="Оптиков 45 к2">Оптиков 45 к2</option>
                                        <option value="Оптиков 49">Оптиков 49</option>
                                        <option value="Оптиков 50">Оптиков 50</option>
                                        <option value="Оптиков 52">Оптиков 52</option>
                                        <option value="Туристская 11">Туристская 11</option>
                                        <option value="Туристская 15">Туристская 15</option>
                                        <option value="Туристская 18">Туристская 18</option>
                                        <option value="Туристская 28">Туристская 28</option>
                                        <option value="Лыжная 3">Лыжная 3</option>
                                        <option value="Лыжная 4">Лыжная 4</option>
                                        <option value="Лыжная 10">Лыжная 10</option>
                                        <option value="Мебельная 19">Мебельная 19</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" size="1" name="front" required="">
                                        <option selected="" disabled=""> № парадной:</option>
                                        <option value="1">1 парадная</option>
                                        <option value="2">2 парадная</option>
                                        <option value="3">3 парадная</option>
                                        <option value="4">4 парадная</option>
                                        <option value="5">5 парадная</option>
                                        <option value="6">6 парадная</option>
                                        <option value="7">7 парадная</option>
                                        <option value="8">8 парадная</option>
                                        <option value="9">9 парадная</option>
                                        <option value="10">10 парадная</option>
                                        <option value="11">11 парадная</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" size="1" name="typeOfLift">
                                        <option value="" selected="" disabled="">Вид лифта:</option>
                                        <option value="пасс.">Пассажирский</option>
                                        <option value="груз.">Грузовой</option>
                                        <option value="пож.">Пожарный</option>
                                        <option value="лев_груз.">Левый грузовой</option>
                                        <option value="прав_груз">Правый грузовой</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn color_but_blue" type="submit">
                                        Поиск
                                    </button>
                                </div>
                                     <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
<div class="row">
<div class="table-responsive-sm">
<table class="table  table-hover" >
  <thead >
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Адрес</th>       
      <th scope="col">Проделанная работа</th>       
      <th class="notice" scope="col">Записки механика</th>          
    </tr>
  </thead>
  <tbody>
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
  <td><?php echo e(Carbon\Carbon::parse($detail ->date )->format('d-m-Y ')); ?></td>
  <td><?php echo e($detail ->address); ?>-<?php echo e($detail ->front); ?>-<?php echo e($detail ->typeOfLift); ?></td>    
  <td><?php echo e($detail ->detail); ?></td>
  <td class="notice"><?php echo e($detail ->notice); ?></td>
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <?php echo e($details->links()); ?>

</div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>