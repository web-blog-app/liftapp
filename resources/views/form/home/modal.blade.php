
<div class="form-group">
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="№ ошибки:" name="error" >
</div>                      
<div class="form-group">
  <label for="mech-notice">Заметка механика:</label>
  <textarea class="form-control" id="mech-notice" rows="2" name="notice" ></textarea>
</div>
<div class="form-group">
  <label for="mech-notice">Проделанная работа:</label>
  <textarea class="form-control" id="mech-notice" rows="2" name="work" ></textarea>
</div>                  
<div class="form-group">
  <label for="exampleFormControlSelect1">Cостояние лифта:</label>
  <select class="form-control form-control-sm" id="exampleFormControlSelect1" size="1" name="condition">
    <option value="Запущен">Запущен</option>
    <option value="Остановлен">Остановлен</option>
    <option value="Текущая заявка">Текущая заявка </option>
    <option value="Недоделано">Недоделано </option>
  </select>
</div>                    
<input type="hidden" name='id' value="{{$lift -> id}}">                    
<div class="modal-footer">
  <button type="submit" class="btn btn-primary">Работа сделана!</button>
</div>