@extends('layout.site') 

@section('content')

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">
        <form class=" form drop-form" method="get" action="{{route('searchInfo')}}" >
          <input type="date" name="dateStart">
          <input type="date" name="dateStop">
          <button class="btn color_but_blue" type="submit">Поиск</button>        

                    {{csrf_field()}}
         </form>
      
      <h2 class="text-info"> Выполненные заявоки за пследние x дней <span class="badge badge-warning"></span></h2>
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
                
              @endforeach
              </tr>
            @endforeach
            </tbody>
          </table>       
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection