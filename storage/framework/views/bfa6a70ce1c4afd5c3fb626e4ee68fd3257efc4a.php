<div class="form-group">
  <input type="range" min="1" max="365" name="date" id="date"  onchange="document.getElementById('rangeValue').innerHTML = this.value;"
> <span id="rangeValue" style="color:red;">183</span>                                   
</div>


<?php echo $__env->make('form.allElement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-group">
  <button class="btn color_but_blue" type="submit">Поиск</button>
</div>                                        
                                    

                                
                                 