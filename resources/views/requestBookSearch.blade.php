@extends('layout.site') 

@section('content')

<div class="content request-content">
  <div class="container">
    <div class="row">
      <div class="drop-container">
        <p>
          <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Поиск по базе</button>      
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
           <table class="table  " >
            <thead >
              <tr>
                <th scope="col">Дата</th>
                <th scope="col">Адрес</th>
                <th scope="col">Ошибка</th>
                <th class="hide-note"  scope="col">Этаж</hd>              
                <th class="hide-note">Заметка механика</th> 
                <th scope="col">Проделанная работа</th>
                <th class="hide-note">Механик</hd>
                <th scope="col" class="hide-note"></th>  
              </tr>
            </thead>
            <tbody>

            @foreach($lifts as $lift)
              <tr>
                <td>{{ Carbon\Carbon::parse($lift ->date )->format('d-m')}}
                  <div class="hide-max">                  
                  {{$lift ->human}}
                  </div>
                </td>
                <td>{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeLift}}</td>    
                <td>{{$lift ->typeError}}
                  <div class="hide-max">
                  @if(isset($lift->floor))
                  <br>
                  Этаж:{{$lift -> floor}}
                 @endif
               </div>
               </td>
                <td class="hide-note">{{$lift->floor}}</td>
                <td class="hide-note">{{$lift ->notice}}</td>
                <td >
                  Тип заявки: {{$lift -> seizing}}
                  <br>
                  {{$lift ->work}}
                </td>
                  <td class="hide-note">{{$lift ->human}}</td>

                <td class="hide-note">
                  @if( Auth::user()->name  == $lift->human or Auth::user()->role_id == '1')              
                  <form onsubmit="if (confirm('Удалить запись?')) {return true} else {return false}" method="POST" action="{{route('deleteLift',['id' => $lift->id])}}" >
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-warning btn-sm ">Удалить</button>
                    {{csrf_field()}}
                  </form>
                
              @endif
                </td>
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
  

