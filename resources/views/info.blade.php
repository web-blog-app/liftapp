@extends('layout.site') 

@section('content')

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">  
           <form class=" form drop-form" method="POST" action="{{route('info')}}">
          <div class="row">
            <div class="form-group col-md-3 col-6">
              <label for="dateStart">Дата начала поиска:</label>
              <input type="date" class="form-control" name="dateStart" id="dateStart" required="" value="{{Carbon\Carbon::now() -> format('Y-m-d')}}">
            </div>
            <div class="form-group col-md-3 col-6">
              <label for="dateStop">Дата конца поиска:</label>
              <input type="date" class="form-control" name="dateStop" id="dateStop" required="" value="{{Carbon\Carbon::now() -> subDays(30) -> format('Y-m-d')}}">
            </div>
            
            <div class="form-group col-12">
                <button class="btn btn-primary btn-lg "  type="submit"> Поиск </button>
            </div> 
          </div>          
          {{csrf_field()}}
    </form>
<h2 class="text-danger">Количество заявок  c {{$start ?? '2018-05-17'}} по {{$stop ?? Carbon\Carbon::now() -> format('Y-m-d')}} <span class="badge badge-warning">{{$countErrorAll}}</span></h2>                       
<div class="table-responsive-sm"> 
<table class="table  table-hover" >
  <thead >
      <tr>
      <th scope="col">Адрес</th>
      <th scope="col">Кол-во заявок</th>      
      <th scope="col">%</th> 
    </tr>
  </thead>
  <tbody>
@foreach($countErrorLifts as $key=>$countErrorLift)
<tr>
  @foreach($countErrorLift as $key=>$countError)
    <td>{{$key}}</td>
    <td>{{$countError}}</td>
    <td>{{round(($countError/$countErrorAll)*100, 1)."%"}}</td>
  @endforeach
</tr>
@endforeach
 </table>       
</div>
        <h2 class="text-success">Таблица выполненных дополнительных работ</h2>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Работа</th>
              <th scope="col">Исполнитель</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          @foreach($additionalWorks as $additionalWork)
            <tr>
              <td>{{Carbon\Carbon::parse($additionalWork -> created_at)->format('d-m ') }}</td>
              <td>{{$additionalWork -> additionalWorks}}</td>
              <td>{{$additionalWork -> humans}}</td>
              <td>
                <form class="modal-form" method="post"  action="{{route('additionalworkUpdate')}}">
                  <input type="hidden" name='id' value="{{$additionalWork -> id}}"> 
                  <input type="hidden" name='pay' value="Оплачено"> 
                  <button type="submit" class=" btn-primary"><i class="fas fa-check"></i></button>   
                  {{csrf_field()}}
                </form>                 
              </td>
            </tr>                                   
          @endforeach 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection