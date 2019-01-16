
@extends('layout.site')
@section('content')

@if (Session::has('status')) 
<div class="alert alert-success alert-dismissible fade show"  role="alert">
  {{ Session::get('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="content main-content">
  <div class="layer">
    <div class="container">
      <div class="row"> 
        {{--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">--}}
          {{--<div class="carousel-inner">--}}
            {{--<div class="carousel-item active ">--}}
              {{--<div class="card bg-dark text-white" >--}}
                {{--<img class="card-img col-12" src="img/mex_lift.jpg" alt="Card image">--}}
                {{--<div class="card-img-overlay">--}}
                  {{--<h2 class="card-title">Текущие задачи!</h2>--}}
                  {{--<h5 class="card-text">Задачи которые необходимо выполнить в ближайшее время или все пойдет прахом.</h5>--}}
                  {{--<h5 class="card-text">Увидел неиправность которую нужно исправить, но не срочно.  Сфотографируй и отправь в задачи.</h5>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>  --}}
            {{--@foreach($tasks as $task)--}}
            {{--<div class="carousel-item ">--}}
              {{--<div class="card text-white ">--}}
                  {{--<img class="card-img" src="img/mex_lift.jpg" alt="Card image cap">--}}
                  {{--<div class="card-img-overlay">--}}
                    {{--<h2 class="card-title">Дата задачи: {{Carbon\Carbon::parse($task->created_at)->format('d-m-y')}}</h2>--}}
                    {{--<h5 class="card-text">Что сделать: {{$task -> task}}</h5>--}}
                    {{--<form class="modal-form" method="post"  action="{{route('taskUpdate')}}">--}}
                      {{--<input type="hidden" name='id' value="{{$task -> id}}"> --}}
                      {{--<input type="hidden" name='condition' value="Выполнено"> --}}
                      {{--<button type="submit" class="btn btn-primary">Выполнено</button>--}}
                      {{--{{csrf_field()}}--}}
                    {{--</form>--}}
                  {{--</div>--}}
                {{--</div>                    --}}
              {{--</div>--}}
              {{--@endforeach   --}}
            {{--</div>--}}
          {{--<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
          {{--</a>--}}
          {{--<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
          {{--</a>--}}
        {{--</div>--}}

        <div class="owl-carousel">
          <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
                <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div>
          <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div> <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div> <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div> <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div> <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div> <div>
            <div class="card task-card">
              <img src="img/mex_lift.jpg" alt="" class="image">
              <div class="description">
                <div class="date">
                  Дата: 22-02-2019
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="address">
                  Адрес: Оптиков 15
                </div>
                <div class="lift-type">
                  Лифт: пассажирский
                </div>
                <div class="task">
                  Задача: нужно починить
                </div>
                <div class="assignee">
                  Добавил: Пупкин Вася
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Выполнено</button>
            </div>
          </div>





        </div>
      
        <div class="tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">                            
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Добавить заявку</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="more-tab" data-toggle="tab" href="#more" role="tab" aria-controls="more" aria-selected="false">Добавить ТО</a>
            </li>                           
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addTask" role="tab" aria-controls="addTask" aria-selected="false">Добавить задачу</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addWork" role="tab" aria-controls="addWork" aria-selected="false">Добавить доп. работы</a>
            </li>
          </ul>                                 
          <div class="tab-content" id="myTabContent"> 
            <div class="tab-pane fade scroll-table" id="more" role="tabpanel" aria-labelledby="more-tab">
                <div class="card card-body">
                  <form class=" form drop-form" method="POST" action="{{'addChengeDetail'}}" >
                    {{-- Form include --}}
                    @include('form.home.addChengeDetail')
                    {{csrf_field()}}
                  </form>
                </div>                                  
            </div>
            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="contact-tab">
             @if ($errors->any())
                <ul class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @endif
              <form class="form" method="POST" action="{{route('liftStore')}}">
                {{-- Form include --}}
                @include('form.home.addLift')                                    
                {{csrf_field()}}
              </form>
            </div>
            <div class="tab-pane fade   scroll-table" id="addTask" role="tabpanel" aria-labelledby="important-tab">
              <form class="form" method="POST" enctype="multipart/form-data" action="{{route('addTask')}}">
                {{-- Form include --}}
                @include('form.home.addTask')                                    
                {{csrf_field()}}
              </form>
            </div>
            <div class="tab-pane fade scroll-table" id="addWork" role="tabpanel" aria-labelledby="more-tab">
              <form class="form" method="POST" action="{{route('addАdditionalWork')}}">
                {{-- Form include --}}
                @include('form.home.addAdditionalWork')
                {{csrf_field()}}
              </form>   
             </div>        
          </div>
        </div>
      </div>

      <div id="accordion">
        <div class="card text-danger ">
          <div class="card-header " id="headingOne">
            <h5 class="mb-0  ">
              <button class="btn btn-link  " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Более 5 поломок за месяц
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <ol>            
              @foreach($liftReturns30_5 as $lift)
              <li><a href="{{route('search',['date' => 31, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</a></li>
              @endforeach
              </ol>
             </div>
          </div>
        </div>
        <div class="card text-danger">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Более 3 поломок за 15 дней
              </button>
            </h5>
          </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <ol>
              @foreach($liftReturns16_3 as $lift)
              <li><a href="{{route('search',['date' => 16, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</a></li>
              @endforeach
            </ol>
          </div>
        </div>
        </div>
        <div class="card text-danger">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Более 2 поломок за неделю
              </button>
            </h5>
          </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <ol>
              @foreach($liftReturns7_2 as $lift)
              <li><a   href="{{route('search',['date' => 7, 'address' => $lift ->address, 'front' => $lift ->front, 'typeOfLift' => $lift ->typeOfLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</a></li>
               @endforeach
            </ol>
          </div>
        </div>
        </div>
      </div>
      
      <div class="row">
        <div class="tabs main-tabs">
          <ul class="nav nav-tabs" id="mainTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#stopped" role="tab" aria-controls="stopped" aria-selected="true">Остановлен</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="false">Текущее</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#someday" role="tab" aria-controls="someday" aria-selected="false">Отложено</a>
            </li>
          </ul>                        
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="stopped" role="tabpanel" aria-labelledby="stopped-tab">
              <ul id="notes" class="notes stopped">
								@foreach($liftsStop as $lift)											
                <li class="col">
                  <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')}}</span></p>
                  <p class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeOfLift}}</span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$lift -> id}}">Подробнее</button>
                </li>                             
                @endforeach 
              </ul>
            </div>
            <div class="tab-pane fade" id="current" role="tabpanel" aria-labelledby="profile-tab">
              <ul id="notes" class="notes current">
                @foreach($liftsTime as $lift)
                <li class="col">
                  <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')}}</span></p>
                  <p class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeOfLift}}</span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$lift -> id}}">Подробнее</button>
                </li>
                @endforeach 
              </ul>
            </div>
            <div class="tab-pane fade" id="someday" role="tabpanel" aria-labelledby="someday-tab">
              <ul id="notes" class="notes someday">
                @foreach($lifts as $lift)
                <li class="col">
                  <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')}}</span></p>
                  <p class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeOfLift}}</span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$lift -> id}}">Подробнее</button>
                </li>
                @endforeach 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
 
@foreach($liftAll as $lift) 
<div class="modals">	                        
  <div class="modal fade" id="stopped-{{$lift -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Информация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p class="sub-title">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeOfLift}}</span></p>
              <p class="sub-title">Ошибка: <span>{{$lift -> typeOfError}}</span></p>
              <p class="sub-title">Заметка Механика: <span>{{$lift -> notice}}</span></p>
              <form class="modal-form" method="post"  action="{{route('workUpdate')}}">
                    {{-- Form include --}}
                    @include('form.home.modal')                 
                    {{csrf_field()}}
              </form>
            </div>
        </div>
    </div>
</div>   
@endforeach   
@stop


