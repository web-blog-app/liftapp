
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

        <div class="action-buttons">
          <button type="button" class="boxShadow" data-toggle="modal" data-target="#more">
            Добавить заявку
          </button>
          <button type="button" class="boxShadow" data-toggle="modal" data-target="#add">
            Добавить ТО
          </button>
          <button type="button" class="boxShadow" data-toggle="modal" data-target="#addTask">
            Добавить допы
          </button>
          <button type="button" class="boxShadow" data-toggle="modal" data-target="#addWork">            
            Добавить задачу
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
                <form class="form" id="more_form" method="POST" action="{{route('lifterrorStore')}}">
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
                <form id="add-task_form" class="form" method="POST" enctype="multipart/form-data" action="{{route('additionalworkStore')}}">
                  {{-- Form include --}}
                  @include('form.home.addAdditionalwork')
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
                <form class="form" method="POST" enctype="multipart/form-data" role="form"   action="{{route('taskStore')}}">
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
      
      @if($tasks->count())
       <div class="owl-carousel">
          @foreach($tasks as $task)
          <div>
            <div class="card task-card">
              <img src= {{$task -> fotoTask}}  alt="Image task" class="image">
              <div class="description">
                <div class="date">
                  Описание задачи:
                </div>
                <div class="date">
                  Дата: {{Carbon\Carbon::parse($task->created_at)->format('d-m-y')}}
                </div>
                <div class="address">
                  Адрес: {{$task -> address}}-{{$task -> front}}-{{$task -> typeLift}}
                </div>               
                <div class="task">
                  Задача: {{$task -> task}}
                </div>
                <div class="assignee">
                  Добавил: {{$task -> human}}
                </div>
              </div>
                <form class="modal-form" method="post"  action="{{route('taskUpdate')}}">
                  <input type="hidden" name='id' value="{{$task -> id}}"> 
                  <input type="hidden" name='condition' value="Выполнено"> 
                  <button type="submit" class="btn btn-primary">Выполнено</button>
                    {{csrf_field()}}
                </form>
            </div>
          </div>
          @endforeach  
        </div> 
      </div>
      @endif
    
    <div class="list-group">
      <div class="list-group-item list-group-item-action ">
      <div class="d-flex w-100 justify-content-between">
        <h3 class="mb-1">Более 5 поломок</h3>
        <small>за 1 месяц</small>
    </div>
    @if($liftReturns30_5->count()) 
   <ol>
    @foreach($liftReturns30_5 as $lift)                   
      <li><a href="{{route('searchLift',['date' => 31, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeLift}}</a></li>
      @endforeach
    </ol>
    @else
    <p class="mb-3">Таких лифтов пока не наблюдается. Так держать!</p>
    @endif
    <small>Стоит обратить внимание</small>
  </div>
  <div class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Более 3 поломок</h3>
      <small class="text-muted">за 15 дней</small>
    </div>
     <p class="mb-3">
     @if($liftReturns16_3->count()) 
      @foreach($liftReturns16_3 as $lift)
      <ol>
        <li>
          <a  href="{{route('searchLift',['date' => 16, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeLift}}</a>
        </li>
      </ol>  
      @endforeach        
      @else
        Удивительно, но таких лифтов нет!     
       @endif
      </p>   
    <small class="text-muted">Что-то пошло не так!</small>
  </div>

  <div class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1">Более 2 поломок</h3>
      <small class="text-muted">за 7 дней</small>
    </div>
    <p class="mb-3">
     @if($liftReturns7_2->count()) 
      @foreach($liftReturns7_2 as $lift)      
         <ol>
        <li>
          <a  href="{{route('searchLift',['date' => 7, 'address' => $lift ->address, 'front' => $lift ->front, 'typeLift' => $lift ->typeLift]) }}">{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeLift}}</a>
        </li>
      </ol> 
      @endforeach        
      @else
        Удивительно, но таких лифтов нет!     
        @endif
      </p>
    <small class="text-muted">Нужно разгадать эту загадку!</small>
  </div>
</div>
      <div class="row">
        <div class="tabs main-tabs">
          <ul class="nav nav-tabs" id="mainTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#stopped" role="tab" aria-controls="stopped" aria-selected="true">Остановлен</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="false">Еще не ходил</a>
            </li>            
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane active" id="stopped" role="tabpanel" aria-labelledby="stopped-tab"> 
            <ul id="notes" class="notes stopped">             
                @foreach($liftsStop as $lift)                                     
                <li class="col">
                  <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')}}</span></p>
                  <p class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeLift}}</span></p>
                  <p class="human">Автор: <span>{{$lift -> human}}</span></p>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$lift -> id}}">Подробнее</button>
                </li>                                            
                @endforeach  
                </ul>              
            </div>

            <div class="tab-pane fade  " id="current" role="tabpanel" aria-labelledby="profile-tab">
              <ul id="notes" class="notes current">
                @foreach($liftsTime as $lift)
                <li class="col">
                  <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($lift -> date)->format('d-m-Y ')}}</span></p>
                  <p class="address">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeLift}}</span></p>
                  <p class="human">Автор: <span>{{$lift -> human}}</span></p>
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
              <p class="sub-title">Адрес: <span>{{$lift -> address}}-{{$lift -> front}}-{{$lift -> typeLift}}</span></p>
              <p class="sub-title">Ошибка: <span>{{$lift -> typeError}}</span></p>
              <p class="sub-title">Заметка Механика: <span>{{$lift -> notice}} {{$lift -> work}}</span></p>
              <form class="modal-form" method="post"  action="{{route('lifterrorUpdate')}}">
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


