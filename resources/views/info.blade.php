@extends('layout.site') 

@section('content')

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">  
        <h2 class="text-info">Таблица выполненных заявок для каждого дома <span class="badge badge-warning">{{$countErrorAll}}</span></h2>
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
            </tbody>
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
                <form class="modal-form" method="post"  action="{{route('additionalWorkUpdate')}}">
                  <input type="hidden" name='id' value="{{$additionalWork -> id}}"> 
                  <input type="hidden" name='pay' value="Оплачено"> 
                  <button type="submit" class="btn btn-primary">Оплачено</button>   
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