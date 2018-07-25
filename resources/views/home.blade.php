
@extends('layout.site') 
@extends('header')
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
                    
                  
                    
                    <div class="tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#important" role="tab" aria-controls="important" aria-selected="true">Задачи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="more-tab" data-toggle="tab" href="#more" role="tab" aria-controls="more" aria-selected="false">Доп. работы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Добавить заявку</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addTask" role="tab" aria-controls="addTask" aria-selected="false">Добавить задачу</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addWork" role="tab" aria-controls="addWork" aria-selected="false">Добавить доп. работы</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active scroll-table" id="important" role="tabpanel" aria-labelledby="important-tab">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Дата</th>                                        
                                        <th scope="col">Что сделать</th>
                                        <th scope="col"></th>  
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($tasks as $task)
                                    <tr>
                                        <td>{{Carbon\Carbon::parse($task ->  created_at)->format('d-m')}}</td>                                        
                                        <td>{{$task -> task}}</td>
                                        <td>
                    <form class="modal-form" method="post"  action="{{route('taskUpdate')}}">
                    <input type="hidden" name='id' value="{{$task -> id}}"> 
                    <input type="hidden" name='condition' value="Выполнено"> 
                    <button type="submit" class="btn btn-primary">Выполнено</button>
                     {{csrf_field()}}
                    </form>
                    </td>
                    </tr>
                     @endforeach                                     
                    </tbody>
                     </table>
                       {{$tasks->links()}}
                    </div>
      <div class="tab-pane fade scroll-table" id="more" role="tabpanel" aria-labelledby="more-tab">
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
                            <div class="tab-pane fade" id="add" role="tabpanel" aria-labelledby="contact-tab">
                                
                                  @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form class="form" method="POST" action="{{route('liftStore')}}">
                                    <div class="form-group">
                                        <label for="date">Дата</label>
                                        <input type="date" class=" form-control  form-control-sm " name="date"  value="" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Адрес дома</label>
                                        <select class="form-control form-control-sm" size="1" name="address"  required="">
                                            <option value="" selected="" disabled="">Адрес дома:</option>
                                            <option value="Оптиков 45 к1">Оптиков 45 к1</option>
                                            <option value="Оптиков 45 к2">Оптиков 45 к2</option>
                                            <option value="Оптиков 49">Оптиков 49</option>
                                            <option value="Оптиков 50">Оптиков 50</option>
                                            <option value="Оптиков 52">Оптиков 52</option>
                                            <option value="Туристская 11">Туристская 11</option>
                                            <option value="Туристская 15">Туристская 15</option>
                                            <option value="Туристская 18">Туристская 18</option>
                                            <option value="Туристская 28">Туристская 28</option>
                                            <option value="Лыжная 3">Лыжная 3</option>
                                            <option value="Лыжная 4">Лыжная 4</option>
                                            <option value="Лыжная 10">Лыжная 10</option>
                                            <option value="Мебельная 19">Мебельная 19</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="front">№ парадной</label>
                                        <select class="form-control form-control-sm" size="1" name="front"  required="">
                                            <option value="" selected="" disabled=""> № парадной:</option>
                                            <option value="1">1 парадная</option>
                                            <option value="2">2 парадная</option>
                                            <option value="3">3 парадная</option>
                                            <option value="4">4 парадная</option>
                                            <option value="5">5 парадная</option>
                                            <option value="6">6 парадная</option>
                                            <option value="7">7 парадная</option>
                                            <option value="8">8 парадная</option>
                                            <option value="9">9 парадная</option>
                                            <option value="10">10 парадная</option>
                                            <option value="11">11 парадная</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="typeOfLift">Вид лифта</label>
                                        <select class="form-control form-control-sm" size="1" name="typeOfLift"  required="">
                                            <option value="" selected="" disabled="">Вид лифта:</option>
                                            <option value="вся парадная">Вся парадная</option>
                                            <option value="пасс.">Пассажирский</option>
                                            <option value="груз.">Грузовой</option>
                                            <option value="пож.">Пожарный</option>
                                            <option value="лев_груз.">Левый грузовой</option>
                                            <option value="прав_груз">Правый грузовой</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                   <label for="exampleFormControlSelect1">Cостояние лифта:</label>
                                   <select class="form-control form-control-sm" id="exampleFormControlSelect1" size="1"  name="condition" required=""">
                                   <option value="" selected="" disabled="">Изменить состояние лифта:</option>
                                   <option value="Запущен">Запущен</option>
                                    <option value="Остановлен">Остановлен</option>
                                   <option value="Текущая заявка">Текущая заявка </option>
                                  <option value="Недоделано">Недоделано </option> 
                                   </select>
                                  </div> 
                                    <div class="form-group">
                                        <label for="notice">№ ошибки:</label>
                                        <textarea class="form-control" id="notice" rows="1" name="typeOfError"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="notice">Пометка механник:</label>
                                        <textarea class="form-control" id="notice" rows="3"name="notice"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="work">Проделанная работа:</label>
                                        <textarea class="form-control" id="work" rows="3" name="work"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                    
                                    {{csrf_field()}}
                                </form>
                            </div>
                <div class="tab-pane fade   scroll-table" id="addTask" role="tabpanel" aria-labelledby="important-tab">
                     
                <form class="form" method="POST" action="{{route('addTask')}}">
                                    <div class="form-group">
                                        <label for="task">Добавить новую задачу:</label>
                                        <textarea class="form-control" id="task" rows="2" name="task" required=""></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                    
                                    {{csrf_field()}}
                                </form>
                            </div>
              <div class="tab-pane fade scroll-table" id="addWork" role="tabpanel" aria-labelledby="more-tab">
                        
                               <form class="form" method="POST" action="{{route('addАdditionalWork')}}">
                                   
                                    <div class="form-group">
                                        <label for="additionalWorks">Что сделали:</label>
                                        <textarea class="form-control" id="additionalWorks" rows="2" name="additionalWorks" required=""></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label for="humans">Кто выполнил:</label>
                                        <textarea class="form-control" id="humans" rows="1" name="humans" required=""></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                    
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
         <li>{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</li>
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
         <li>{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</li>
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
         <li>{{$lift ->address}}-{{$lift ->front}}-{{$lift ->typeOfLift}}</li>
         @endforeach
         </ol>
      </div>
    </div>
  </div>
</div>

    <!--<div class="row">-->
    <!--             <div id='calendar' class='calendar'></div>-->
    <!--            </div>-->


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
                    
                    <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="№ ошибки:" name="error" >
                     </div> 
                     
                       <div class="form-group">
                        <label for="mech-notice">Заметка механика:</label>
                        <textarea class="form-control" id="mech-notice" rows="2" name="notice" ></textarea>
                    </div>

                      <div class="form-group">
                        <label for="mech-notice">Проделанная работа:</label>
                        <textarea class="form-control" id="mech-notice" rows="2" name="work" ></textarea>
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Cостояние лифта:</label>
                        <select class="form-control form-control-sm" id="exampleFormControlSelect1" size="1" name="condition">
                            <option value="Запущен">Запущен</option>
                            <option value="Остановлен">Остановлен</option>
                            <option value="Текущая заявка">Текущая заявка </option>
                            <option value="Недоделано">Недоделано </option>
                        </select>
                    </div>
                    
                    <input type="hidden" name='id' value="{{$lift -> id}}"> 
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Работа сделана!</button>
                    </div>
                     {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</div>   
     @endforeach 
   
@stop


