<div class="row">
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="date">Дата</label>   
    <input type="date" class="form-control form-control-sm" todayButton="true" name="date" required="" />
</div>

   {{-- Form include --}}
@include('form.allElement')

<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="exampleFormControlSelect1">Cостояние лифта:</label>
    <select class="form-control form-control-sm" id="exampleFormControlSelect1" size="1"  name="condition" required="">
        <option value="" selected="" disabled="">Cостояние лифта:</option>
        <option value="Запущен">Запущен</option>
        <option value="Остановлен">Остановлен</option>
        <option value="Текущая заявка">Еще не ходил </option>
    </select>
</div> 
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="typeOfError">№ ошибки:</label>
    <textarea class="form-control" id="typeOfError" rows="1" name="typeOfError"></textarea>
</div> 
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="floor">№ этажа:</label>
    <input type="number" class="form-control" id="floor" name="floor" value="" />
</div>
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="seizing">Вид заявки:</label>
    <select class="form-control form-control-sm" size="1" name="seizing" required="">        
        <option value="Не работает">Не работает</option>
        <option value="Застревание">Застревание</option>
        <option value="Шум">Шум</option>
        <option value="Другое">Другое</option>        
   </select>
</div>
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="notice">Пометка механника:</label>
    <textarea class="form-control" rows="2" id="notice" name="notice"></textarea>
</div>
<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label for="work">Проделанная работа:</label>
    <textarea class="form-control" id="work" rows="2" name="work"></textarea>
</div>
<input type="hidden" name="human" value="{{ Auth::user()->name }}">
 
<button type="submit" class="btn btn-primary modal-form-submit">Отправить</button>
</div>
