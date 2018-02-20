
@extends('layout.site') 

@section('content')

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="wrapper_open">
<button  type="button" class=" btn color_but_blue btn_open"> Добавить новую заявку</button>

<form class="form_hidden" method="POST" action="{{route('liftStore')}}">
 
<div class="row ">
  
  <div class="col-sm-6 col-md-2" >
  <input class=" form-control  form-control-sm  tcal"  name="date" placeholder="Выберите дату:"  value="" required />
  </div>
  <div class="col-sm-6 col-md-2 ">
    <select class="form-control form-control-sm" size="1" name="address" required>
      <option value="" selected disabled>Адрес дома:</option>
      <option value="Оптиков 45">Оптиков 45</option>    
      <option value="Оптиков 49">Оптиков 49</option>
      <option value="Оптиков 50">Оптиков 50</option>
      <option value="Оптиков 52">Оптиков 52</option>
      <option value="Туристская 11">Туристская 11</option>
      <option value="Туристская 15">Туристская 15</option>
      <option value="Туристская 18">Туристская 18</option>
      <option value="Туристская 28">Туристская 28</option>
      <option value="Туристская Лыжная 3">Лыжная 3</option>
      <option value="Туристская Лыжная 4">Лыжная 4</option>
      <option value="Туристская Лыжная 10">Лыжная 10</option>
    </select>
  </div>
  <div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="front" required>
      <option value=""  selected disabled> № парадной:</option>
      <option value="1">1 парадная</option>    
      <option value="2">2 парадная</option>
      <option value="3">3 парадная</option>
      <option value="4">4 парадная</option>
      <option value="5">5 парадная</option>
      <option value="6">6 парадная</option>
      <option value="7">7 парадная</option>
      <option value="8">8 парадная</option>  
    </select>
  </div>

  <div class="col-sm-6 col-md-2">
    <select class="form-control form-control-sm" size="1"  name="typeOfLift" required>
      <option value="" selected disabled>Вид лифта:</option>
      <option value="Пассажирский">Пассажирский</option>    
      <option value="Грузовой">Грузовой</option>
      <option value="Пожарный">Пожарный</option>
      <option value="Грузовой">Левый грузовой</option>
      <option value="Грузовой">Правый грузовой</option>
    </select>
 </div>
<div class="col-sm-6 col-md-2">
  <input class="form-control form-control-sm" type="text" name="typeOfError" placeholder="Ошибка:" required>
 </div> 
 <div class="col-sm-6 col-md-2">
  <input class="form-control " type="text" name="notice" placeholder="Пометка механник:">
</div>
 <div class="col-sm-12 col-md-12"> 
  <input class="form-control form-control-sm" type="text" name="work" placeholder="Проделанная работа:" >
</div>
 
<div class="col-sm-12">
  <button class=" btn color_but_red" type="submit">Отправить</button>
 {{csrf_field()}}
 </div>  
</form>
</div>
</div>
</div>
<div class="container">
<div class="row">
@foreach($lifts as $lift)
<div class="col-md-4 col-sm-6 ">
<div class="wrapper ">
  <div class="wrapper_wp ">
  <div class="date">Дата поломки: <span>{{$lift -> date}}</span></div>
  <div class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeOfLift}}</span></div>
  <div class="error">№ ошибки: <span>{{$lift -> typeOfError}}</span>  </div>
   <div class="notice"> Текущее состояние лифта: <span>{{$lift -> notice}}</span></div>
  <div class="work">
 
    <form method="post"  action="{{route('workUpdate')}}">
      <p>Проделанная работа:</p>
      <input type="text" class="form-control form-control-sm" required placeholder="Проделанная работа:" name="work">
      <p>Изменение состояния лифта:</p>
      <select class="form-control form-control-sm" size="1"  name="notice">
        <option selected disabled>Выбрать состояние лифта:</option>
        <option value="Запущен">Запущен</option>
        <option value="Остановлен">Остановлен</option>
        <option value="Устал">Еле дышит</option>
     </select>    
      </div>
        <input type="hidden" name='id' value="{{$lift -> id}}"> 
       <button class="btn color_but_red" type="submit">Работа сделана</button>
        {{csrf_field()}}
    </form>
 </div>
  </div>
</div>
@endforeach
</div>
</div>
</div>


@stop


