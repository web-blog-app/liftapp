<div class="form-group col-md-4 col-sm-6 col-xs-12">
	<label style="color:#fff;">Кол-во от теккущей даты:</label>
  <input type="range" min="1" max="1000" name="date" id="date"  onchange="document.getElementById('rangeValue').innerHTML = this.value;"
> <span id="rangeValue" style="color:#fff;">500</span>                                   
</div>
<div class="form-group  col-md-4 col-sm-6 col-xs-12">
    
    <select class="form-control form-control-sm" size="1" name="address"  required="">
        <option value="" selected="" disabled="">Адрес дома:</option>        
        <option value="Оптиков 45 к2">Оптиков 45 к2</option>
        <option value="Оптиков 49">Оптиков 49</option>
        <option value="Оптиков 50">Оптиков 50</option>
        <option value="Оптиков 52">Оптиков 52</option>        
        <option value="Туристская 15">Туристская 15</option>
        <option value="Туристская 18">Туристская 18</option>
        <option value="Туристская 28">Туристская 28</option>
        <option value="Лыжная 3">Лыжная 3</option>
        <option value="Лыжная 4">Лыжная 4</option>        
        <option value="Мебельная 19">Мебельная 19</option>
   </select>
</div>
<div class="form-group col-md-4 col-sm-6 col-xs-12">
    
    <select class="form-control form-control-sm" size="1" name="front" >
        <option value="" selected="" disabled=""> № парадной:</option>
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
<div class="form-group  col-md-4 col-sm-6 col-xs-12">
    
    <select class="form-control form-control-sm" size="1" name="typeLift" >
        <option value="" selected="" disabled="">Вид лифта:</option>
        <option value="вся парадная">Вся парадная</option>
        <option value="пасс.">Пассажирский</option>
        <option value="груз.">Грузовой</option>
        <option value="пож.">Пожарный</option>
        <option value="лев_груз.">Левый грузовой</option>
        <option value="прав_груз">Правый грузовой</option>
        <option value="подъемник">Подъемник</option>
    </select>
</div>
<div class="form-group col-md-4 col-sm-6 col-xs-12">
  <button class="btn color_but_blue" type="submit">Поиск</button>
</div>                                        
                                    

                                
                                 