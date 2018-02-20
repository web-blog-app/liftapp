@extends('layout.site') 

@section('content')
<div class="container">
<div class="wrapper_open">
<button  type="button" class=" btn color_but_blue btn_open">Заказать детали</button>

  <form class="form_hidden" action="{{route('addDetail')}}" method="post"> 

  <div class="col-sm-6 col-md-2"> 
  <select class="form-control form-control-sm" size="1"  name="address">
    <option selected disabled>Выберите адрес дома:</option>
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
  <input class="form-control form-control-sm" type="text" class="form-control"  placeholder="Серийный номен:" name="number">
</div>
  <div class="col-sm-6 col-md-2">
  <select class="form-control form-control-sm"  size="1"  name="pay">
    <option  value="Ожидание" >В пути</option>
    <option value="Доставлено">Доставлено</option>    
  </select>
  </div>  
  <div class="col-sm-6 col-md-2">  
  <input type="text" class="form-control form-control-sm"  placeholder="Примечания" name ="notice">
  </div>
  <div class="col-sm-12 col-md-2">
  <button  class=" btn color_but_red"  type="submit">Отправить </button>
  </div>
   {{csrf_field()}}
</form>
</div>
</div>

<div class="container">
<div class="row ">
@foreach($details as $detail)
<div class="col-md-4 col-sm-6 ">
<div class="wrapper ">
  <div class="wrapper_wp ">
  <div class="date">Дата заказа: <span>{{$detail ->date}}</span></div>
  <div class="address">Адрес: <span>{{$detail->address}}</span></div>
  <div class="error">Серийный номер: <span>{{$detail ->number}}</span> </div>
  <div class="notice">Текущее состояние заказа: <span>{{$detail ->pay}}</span></div>
  <div class="notice">Примечания: <span>{{$detail ->notice}}</span></div>
 <form method="post"  action="{{route('detailUpdate')}}">      
    <p>Изменить состояние заказа:</p>      
    <select class="form-control form-control-sm" size="1"  name="pay">
    <option  value="Ожидание" >В пути</option>
    <option value="Доставлено">Доставлено</option>    
    </select>         
    <input type="hidden" name='id' value="{{$detail -> id}}"> 
    <p>Добавить коментарий:</p>  
    <input type="text" class="form-control form-control-sm" placeholder="Примечание"  name="notice">
    <button class="btn color_but_red" type="submit">Деталь получена</button>
        {{csrf_field()}}
    </form>
 </div>
  </div>
</div>
@endforeach
</div>
</div>
</div>




@endsection
