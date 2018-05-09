 

<?php $__env->startSection('content'); ?>

<div class='container'>
<div class='row'>
<div class="wrapper_open">
<button  type="button" class=" btn color_but_red btn_open">
  <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i>
Заказать детали
</button>

  <form class="form_hidden" action="<?php echo e(route('addDetail')); ?>" method="post"> 
<div class='row'>
  <div class="col-sm-6 col-md-2"> 
  <select class="form-control form-control-sm" size="1"  name="address" required>
    <option value="" selected disabled>Выберите адрес дома:</option>
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

 <div class="col-sm-6 col-md-2">
  <input class="form-control form-control-sm" type="text"   placeholder="Название детали:" name="detailName">
</div>

  <div class="col-sm-6 col-md-2">
  <input class="form-control form-control-sm" type="text" placeholder="Серийный номен:" name="number"/>
</div>
  
  <div class="col-sm-6 col-md-2">  
  <input class="form-control form-control-sm " type="text" placeholder="Примечания" name ="notice"/>
  </div>
  <div class="col-sm-6 col-md-2"> 
   
   <select class="form-control form-control-sm" type="text" placeholder="Состояние заказа"  name="condition" required  >
      <option  value="нужно заказать">нужно заказать</option>
     <option  value="ожидание" >в пути</option>
    <option value="доставлено">доставлено</option>
    <option value="акт подписан">акт подписан</option>
    </select>
</div>
 
  
  <div class="col-sm-12 col-md-2">
  <button  class=" btn color_but_blue"  type="submit">
      <i class="fa fa-paper-plane-o" aria-hidden="true fa-lg"></i>
  Отправить
  </button>
  </div>
  </div>
   <?php echo e(csrf_field()); ?>

</form>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Деталь заказана</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Нужно заказать </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Акт подписан</a>
  </li>
 
</ul>

<div class="tab-content">

<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="wrapper_lift">
<?php $__currentLoopData = $detailsAkt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 col-sm-6 ">
<div class="wrapper">
  <div class="wrapper_wp">
  <div class="date">Дата заказа: <span><?php echo e(Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')); ?></span></div>
  <div class="address">Адрес: <span><?php echo e($detail->address); ?></span></div>
  <div class="address">Запчасть: <span><?php echo e($detail->detailName); ?></span></div>
  <div class="error">Серийный номер: <span><?php echo e($detail ->number); ?></span> </div>
  <div>Текущее состояние: <span><?php echo e($detail ->condition); ?></span></div>
   <?php if( !empty($detail -> notice)): ?>
  <div class="notice">Примечания: <span><?php echo e($detail ->notice); ?></span></div>
   <?php endif; ?>
 <form method="post"  action="<?php echo e(route('detailUpdate')); ?>"> 
 <div class="form-group">
    <label for="exampleFormControlSelect2">Изменить состояние заказа:</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect2" name="condition" size="1"  >
     <option  value="ожидание" >в пути</option>
     <option  value="нужно заказать">нужно заказать</option>
    <option value="доставлено">доставлено</option> 
    <option value="акт подписан">акт подписан</option>
    </select>
  </div>

  <div class="form-group">
     <label for="exampleFormControlInput2">Добавить коментарий:</label>
     <input type="text" class="form-control form-control-sm " id="exampleFormControlInput1" placeholder="Примечание механика:" name="notice" >
  </div>        
    <input type="hidden" name='id' value="<?php echo e($detail -> id); ?>">     
    <button class="btn color_but_blue" type="submit">
      <i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i>
    Деталь получена
  </button>
        <?php echo e(csrf_field()); ?>

    </form>
 </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    
</div>

    
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="wrapper_lift">
<?php $__currentLoopData = $detailsWait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 col-sm-6 ">
<div class="wrapper">
  <div class="wrapper_wp">
  <div class="date">Дата заказа: <span><?php echo e(Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')); ?></span></div>
  <div class="address">Адрес: <span><?php echo e($detail->address); ?></span></div>
  <div class="address">Запчасть: <span><?php echo e($detail->detailName); ?></span></div>
  <div class="error">Серийный номер: <span><?php echo e($detail ->number); ?></span> </div>
  <div>Текущее состояние: <span><?php echo e($detail ->condition); ?></span></div>
   <?php if( !empty($detail -> notice)): ?>
  <div class="notice">Примечания: <span><?php echo e($detail ->notice); ?></span></div>
   <?php endif; ?>
 <form method="post"  action="<?php echo e(route('detailUpdate')); ?>"> 
 <div class="form-group">
    <label for="exampleFormControlSelect2">Изменить состояние заказа:</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect2" name="condition" size="1"  >
     <option  value="ожидание" >в пути</option>
     <option  value="нужно заказать">нужно заказать</option>
    <option value="доставлено">доставлено</option> 
    <option value="акт подписан">акт подписан</option>
    </select>
  </div>

  <div class="form-group">
     <label for="exampleFormControlInput2">Добавить коментарий:</label>
     <input type="text" class="form-control form-control-sm " id="exampleFormControlInput1" placeholder="Примечание механика:" name="notice" >
  </div>        
    <input type="hidden" name='id' value="<?php echo e($detail -> id); ?>">     
    <button class="btn color_but_blue" type="submit">
      <i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i>
    Деталь получена
  </button>
        <?php echo e(csrf_field()); ?>

    </form>
 </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>  
  
      
  </div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
      <div class="wrapper_lift">
<?php $__currentLoopData = $detailsStart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 col-sm-6 ">
<div class="wrapper ">
  <div class="wrapper_wp ">
  <div class="date">Дата заказа: <span><?php echo e(Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')); ?></span></div>
  <div class="address">Адрес: <span><?php echo e($detail->address); ?></span></div>
   <div >Деталь: <span><?php echo e($detail->detailName); ?></span></div>
  <div class="error">Серийный номер: <span><?php echo e($detail ->number); ?></span> </div>
  <div>Текущее состояние: <span><?php echo e($detail ->condition); ?></span></div>
   <?php if( !empty($detail -> notice)): ?>
  <div class="notice">Примечания: <span><?php echo e($detail ->notice); ?></span></div>
   <?php endif; ?>
 <form method="post"  action="<?php echo e(route('detailUpdate')); ?>"> 
 <div class="form-group">
    <label for="exampleFormControlSelect2">Изменить состояние заказа:</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect2" name="condition" size="1"  >
     <option  value="ожидание" >в пути</option>
     <option  value="нужно заказать">нужно заказать</option>
    <option value="доставлено">доставлено</option>
    <option value="акт подписан">акт подписан</option>
    </select>
  </div>

  <div class="form-group">
     <label for="exampleFormControlInput2">Добавить коментарий:</label>
     <input type="text" class="form-control form-control-sm " id="exampleFormControlInput1" placeholder="Примечание механика:" name="notice" >
  </div>        
    <input type="hidden" name='id' value="<?php echo e($detail -> id); ?>">     
    <button class="btn color_but_blue" type="submit">
      <i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i>
    Деталь получена
  </button>
        <?php echo e(csrf_field()); ?>

    </form>
 </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
  </div>
   </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>