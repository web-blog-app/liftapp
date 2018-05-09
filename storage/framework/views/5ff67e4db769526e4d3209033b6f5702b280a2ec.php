 

<?php $__env->startSection('content'); ?>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">      
        <button class="btn color_but_red" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-tasks fa-lg" aria-hidden="true"></i>       
          Важные задачи:     
        </button>     
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <ol>         
          <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><span><?php echo e(Carbon\Carbon::parse($task ->  created_at)->format('d-m-Y ')); ?></span> - <?php echo e($task -> task); ?></li>          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">      
        <button class="btn color_but_red collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fa fa-briefcase fa-lg" aria-hidden="true"></i>
          Дополнительные работы:
        </button>      
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
         <ol>
        
          <?php $__currentLoopData = $additionalWorks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalWork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li>
            <span><?php echo e(Carbon\Carbon::parse($additionalWork -> created_at)->format('d-m-Y ')); ?></span> - <?php echo e($additionalWork -> additionalWorks); ?>

            
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </ol>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">      
        <button class="btn color_but_red collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>
         Добавить заявку:
        </button>      
    </div> 
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
   <div class="card-body">
        
<form  method="POST" action="<?php echo e(route('liftStore')); ?>">
 
<div class="row ">
  
  <div class="col-sm-6 col-md-2 mx-0" >
  <input class=" form-control  form-control-sm  tcal"  name="date" placeholder="Выберите дату:"  value="" required />
  </div>
  <div class="col-sm-6 col-md-2 ">
    <select class="form-control form-control-sm" size="1" name="address" required>
      <option value="" selected disabled>Адрес дома:</option>
      <option value="Оптиков 45 к1">Оптиков 45 к1</option>
      <option value="Оптиков 45 к2">Оптиков 45 к2</option>      
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
      <option selected disabled> № парадной:</option>
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

  <div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="typeOfLift" required>
      <option value="" selected disabled>Вид лифта:</option>
      <option value="пасс.">Пассажирский</option>    
      <option value="груз.">Грузовой</option>
      <option value="пож.">Пожарный</option>
      <option value="лев_груз.">Левый грузовой</option>
      <option value="прав_груз">Правый грузовой</option>
    </select>
 </div>

   <div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="condition" required>
      <option value="" selected disabled>Состояние лифта:</option>
      <option value="Работает">В работе</option>    
      <option value="Остановлен">Остановлен</option>      
    </select>
 </div>

 <div class="col-sm-6 col-md-2">
  <input class="form-control form-control-sm" type="text" name="typeOfError" placeholder="Ошибка:" required>
 </div> 

 <div class="col-sm-6 col-md-6">
  <input class="form-control " type="text" name="notice" placeholder="Пометка механник:">
</div>
 <div class="col-sm-6 col-md-6"> 
  <input class="form-control form-control-sm" type="text" name="work" placeholder="Проделанная работа:" >
</div>
 
<div class="col-sm-12">
  <button class=" btn color_but_blue" type="submit">
  <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
  Отправить
</button>
 <?php echo e(csrf_field()); ?>

 </div>   
</form>
  </div>
  </div>
</div>
</div>
</div>          

<div class="row">
  <div class="wrapper_lift">
<?php $__currentLoopData = $lifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 col-sm-6 ">
<div class="wrapper">
  <div class="wrapper_wp ">
  <div class="date">Дата заявки:<span><?php echo e(Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')); ?></span></div>
  <div class="address">Адрес: <span><?php echo e($lift -> address); ?>-<?php echo e($lift -> front); ?>-<?php echo e($lift -> typeOfLift); ?></span></div>
  <div class="error">№ ошибки: <span><?php echo e($lift -> typeOfError); ?></span> </div>
  <div class="condition">Cостояние лифта: <span><?php echo e($lift -> condition); ?></span></div>
  <div class="notice">Заметка механника: 
    <span><?php echo e($lift -> notice); ?></span>
  </div>

<form method="post"  action="<?php echo e(route('workUpdate')); ?>">
    <div class="form-group">
    <label for="exampleFormControlInput1">Проделанная работа:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Проделанная работа:" name="work" required>
  </div> 
  <div class="form-group">
    <label for="exampleFormControlSelect1">Cостояние лифта:</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect1" size="1"  name="notice">
      <option selected disabled>Изменить состояние лифта:</option>
      <option value="Запущен">Запущен</option>
      <option value="Остановлен">Остановлен</option>      
    </select>
  </div> 
  <input type="hidden" name='id' value="<?php echo e($lift -> id); ?>"> 
   <button class="btn color_but_blue" type="submit">
    <i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i>
       Работа сделана
     </button>
        <?php echo e(csrf_field()); ?>

</form>
 </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>