
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

        <div class="action-buttons">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#more">
            Добавить заявку
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
            Добавить ТО
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTask">
            Добавить задачу
          </button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addWork">
            Добавить доп. работы
          </button>
        </div>

        <div class="modal" id="add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Новое ТО</h4>
              </div>
              <div class="modal-body">
                <form id="add_form" class=" form drop-form" method="POST" action="{{'addChengeDetail'}}" >
                  {{-- Form include --}}
                  @include('form.home.addChengeDetail')
                  {{csrf_field()}}
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="more">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Новая Заявка</h4>
              </div>
              <div class="modal-body">
                <form class="form" id="more_form" method="POST" action="{{route('liftStore')}}">
                  {{-- Form include --}}
                  @include('form.home.addLift')
                  {{csrf_field()}}
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="addTask">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Добавить Доп. работу</h4>
              </div>
              <div class="modal-body">
                <form id="add-task_form" class="form" method="POST" enctype="multipart/form-data" action="{{route('addTask')}}">
                  {{-- Form include --}}
                  @include('form.home.addTask')
                  {{csrf_field()}}
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal form-modal" id="addWork">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Добавить Задачу</h4>
              </div>
              <div class="modal-body">
                <form id="add-work_form" class="form" method="POST" action="{{route('addАdditionalWork')}}">
                  {{-- Form include --}}
                  @include('form.home.addAdditionalWork')
                  {{csrf_field()}}
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
              </div>
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


