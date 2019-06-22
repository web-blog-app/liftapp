@extends('layout.site') 

@section('content')

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">
        <p>
          <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Поиск по базе</button>      
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <form class="drop-form" method="get" action="{{route('searchLift')}}">
                {{-- Form include --}}
                @include('form.request.request')
                {{csrf_field()}}
              </form>
            </div>
          </div>
        </div>          
               
        <div class="table-responsive-sm">
          <table class="table  table-hover" >
            <thead >
              <tr>
                <th scope="col">Дата</th>
                <th scope="col">Адрес</th>
                <th scope="col">Ошибка</th> 
                <th class="hide-note" scope="col">Этаж</th> 
                <th class="hide-note" scope="col">Вид заявки</th> 
                <th class="hide-note" scope="col">Заметка механика</th> 
                <th scope="col">Проделанная работа</th> 
                <th class="hide-note" scope="col">Механик</th>
              </tr>
            </thead>
            <tbody>
            @foreach($lifts as $lift)
              <tr>
                <td>{{ Carbon\Carbon::parse($lift ->date )->format('d-m')}}</td>
                <td>{{$lift->address}}-{{$lift->front}}-{{$lift->typeLift}}</td>
                <td>{{$lift->typeError}}</td>
                <td class="hide-note">{{$lift->floor}}</td>
                <td class="hide-note">{{$lift->seizing}}</td>                
                <td class="hide-note">{{$lift ->notice}}</td>
                <td>{{$lift ->work}}</td>
                <td class="hide-note">{{$lift->human}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$lifts->links()}}
      </div>
    </div>
  </div>     
</div>

@endsection
  

