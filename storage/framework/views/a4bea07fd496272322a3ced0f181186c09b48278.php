 

<?php $__env->startSection('content'); ?>

<div id="accordion">
  
  <div class="card">
    <div class="card-header" id="headingOne">      
        <button class="btn color_but_red" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>       
          Замена детали:     
        </button>     
    </div>

  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
  <div class="card-body">
<form  method="POST" action="<?php echo e('addChengeDetail'); ?>">
  <div class="row">
  <div class="col-sm-6 col-md-2 ">
<select class="form-control form-control-sm" size="1"   name="address" required>
    <option value=''  selected disabled>Адрес:</option>
    <option value="Оптиков 45">Оптиков 45</option>    
    <option value="Оптиков 49">Оптиков 49</option>
    <option value="Оптиков 50">Оптиков 50</option>
    <option value="Оптиков 52">Оптиков 52</option>
    <option value="Туристская 11">Туристская 11</option>
    <option value="Туристская 15">Туристская 15</option>
    <option value="Туристская 18">Туристская 18</option>
    <option value="Туристская 28">Туристская 28</option>
    <option value="Туристская Лыжная 3">Лыжная 3</option>
    <option value="Туристская Лыжная 4">Лыжная 4</option>
    <option value="Туристская Лыжная 10">Лыжная 10</option>
</select>
</div>
<div class="col-sm-6 col-md-2 ">
<select class="form-control form-control-sm" size="1"  name="front" required>
    <option value=''  selected disabled> № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>  
</select>
</div>
<div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="typeOfLift" required>
      <option value="" selected disabled>Вид лифта:</option>
      <option value="Пасс.">Пассажирский</option>    
      <option value="Груз.">Грузовой</option>
      <option value="Пож.">Пожарный</option>
      <option value="Лев_груз.">Левый грузовой</option>
      <option value="Прав_груз">Правый грузовой</option>
    </select>
 </div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="detail" placeholder="Проделанная работа:" required >
</div>
<div class="col-sm-6 col-md-2 ">
<input class="form-control form-control-sm" type="text" name="notice" placeholder="Пометка механика:">
</div>
<div class="col-sm-12 col-md-2 ">
 <button class=" btn color_but_blue" type="submit">
    <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
 Отправить
</button>
 </div>
 <?php echo e(csrf_field()); ?>

 </div>
</form>      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      
        <button class="btn color_but_red collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fa fa-search" aria-hidden="true"></i>
          Поиск 
        </button>
   
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <form  method="post" action="<?php echo e(route('search')); ?>">
<div class="row">
  <div class="col-sm-2">
<select  class="form-control"  size="1" name="date">
    <option value="month">Месяц</option>
    <option value="week">Неделя</option>  
    <option value="year">Год</option>
</select>
</div>
<div class="col-sm-2">
<select class="form-control"  size="1"  name="address">
    <option selected disabled>Адрес дома:</option>
    <option value="Оптиков 45">Оптиков 45</option>    
    <option value="Оптиков 49">Оптиков 49</option>
    <option value="Оптиков 50">Оптиков 50</option>
    <option value="Оптиков 52">Оптиков 52</option>
    <option value="Туристская 11">Туристская 11</option>
    <option value="Туристская 15">Туристская 15</option>
    <option value="Туристская 18">Туристская 18</option>
    <option value="Туристская 28">Туристская 28</option>
    <option value="Туристская Лыжная 3">Лыжная 3</option>
    <option value="Туристская Лыжная 4">Лыжная 4</option>
    <option value="Туристская Лыжная 10">Лыжная 10</option>
</select>
</div>
<div class="col-sm-2">  
<select class="form-control"  size="1"  name="front">
    <option selected disabled> № парадной:</option>
    <option value="1">1 парадная</option>    
    <option value="2">2 парадная</option>
    <option value="3">3 парадная</option>
    <option value="4">4 парадная</option>
    <option value="5">5 парадная</option>
    <option value="6">6 парадная</option>
    <option value="7">7 парадная</option>
    <option value="8">8 парадная</option>  
</select>
</div>
<div class="col-sm-2">  
<select class="form-control"  size="1"  name="typeOfLift">
    <option selected disabled>Тип лифта:</option>
    <option value="Пасс.">Пассажирский</option>    
    <option value="Груз.">Грузовой</option>
    <option value="Пож.">Пожарный</option>
    <option value="Лев_груз.">Левый грузовой</option>
    <option value="Прав_груз.">Правый грузовой</option>
   </select>
   </div>
   <div class="col-sm-2">
 <button class="btn color_but_blue" type="submit">
    <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
 Поиск
</button>
 <?php echo e(csrf_field()); ?>

 </div>
</form>
      </div>
    </div>
  </div>
  
  </div>
</div>




 
<div class="table-responsive-sm">
<table class="table  table-hover" >
  <thead >
    <tr>
      <th scope="col">Дата замены</th>
      <th scope="col">Адрес дома-№пар.-Лифт</th>       
      <th scope="col">Работа</th>       
      <th scope="col">Записки механика</th>          
    </tr>
  </thead>
  <tbody>
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
  <td><?php echo e($detail ->date); ?></td>
  <td><?php echo e($detail ->address); ?>-<?php echo e($detail ->front); ?> - <?php echo e($detail ->typeOfLift); ?></td>    
  <td><?php echo e($detail ->detail); ?></td>
  <td><?php echo e($detail ->notice); ?></td>
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>