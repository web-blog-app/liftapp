<div class="row">

		{{-- Form include --}}
      @include('form.allElement')

  <div class="form-group col-md-6 col-sm-6">
    	<label for="humans">Кто выполнил:</label>
    	<input type="text" class="form-control" id="humans"  name="humans" required=""/>
  </div>  	
	<div class="form-group col-md-12 col-sm-12">
  		<label for="additionalWorks">Проделанная работа:</label>
    	<textarea class="form-control" id="additionalWorks" rows="2" name="additionalWorks" required=""></textarea>
  </div>
  
 	<button type="submit" class="btn btn-primary">Отправить</button>
</div>