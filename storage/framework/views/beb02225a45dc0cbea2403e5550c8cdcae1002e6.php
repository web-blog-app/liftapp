
<div class="row">

      
    <?php echo $__env->make('form.allElement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   <div class="form-group col-md-6 col-sm-6">
     <label for="notice">Пометка механника:</label>
    <input class="form-control" type="text" id="notice" name="notice" placeholder="Пометка механика:">
  </div>
  <div class="form-group col-md-12 col-sm-12">
     <label for="detail">Проделанная работа:</label>
    <input class="form-control" type="text" name="detail" placeholder="Проделанная работа:" required="">
  </div> 
  <input type="hidden" name="human" value="<?php echo e(Auth::user()->name); ?>"> 
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Отправить</button>
  </div>                                     
</div>                                    
                                
                               