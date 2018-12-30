
  <div class="row">
   {{-- Form include --}}
  @include('form.allElement')
	
	<div class="form-group col-md-6 col-sm-6">
		<label for="task">Загрузите фото задачи: </label>
  	<input type="file" name="fotoTask" class="form-control">
	</div>
  <div class="form-group col-md-12 col-sm-12">
    <label for="task">Новая задача:</label>
    <input class="form-control" id="task"  name="task" value="" required="">
  </div>
  <input type="hidden" name="human" value="{{ Auth::user()->name }}">	
 	<button type="submit" class="btn btn-primary ">Отправить</button> 
	
</div> 
                               