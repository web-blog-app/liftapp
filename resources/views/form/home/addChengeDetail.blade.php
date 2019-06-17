
<div class="row">

      {{-- Form include --}}
    @include('form.allElement')

   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
     <label for="notice">Пометка механника:</label>
    <input class="form-control" type="text" id="notice" name="notice" placeholder="Пометка механика:">
  </div>
  <div class="form-group col-md-12 col-sm-12 col-xs-12">
     <label for="detail">Проделанная работа:</label>
    <input class="form-control" type="text" name="detail" placeholder="Проделанная работа:" required="">
  </div> 
  <input type="hidden" name="human" value="{{ Auth::user()->name }}">
  <button type="submit" class="btn btn-primary modal-form-submit">Отправить</button>
</div>
