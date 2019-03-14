<div class="row">

		{{-- Form include --}}
      @include('form.allElement')

  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    	<label for="humans">Кто выполнил:</label>
    	<input type="text" class="form-control" id="humans"  name="humans" required=""/>
  </div>  	
	<div class="form-group col-md-12 col-sm-12 сщд-чы-12">
  		<label for="additionalWorks">Проделанная работа:</label>
    	<textarea class="form-control" id="additionalWorks" rows="2" name="additionalWorks" required=""></textarea>
  </div>
  
 	<button type="submit" class="btn btn-primary modal-form-submit">Отправить</button>
</div>