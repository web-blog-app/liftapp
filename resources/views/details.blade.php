@extends('layout.site') 
@extends('header')
@section('content')





        <div class="content parts-content">
        <div class="container">
            <div class="row">
                <div class="drop-container">
                    <p>
                        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse-order" aria-expanded="false" aria-controls="collapse-order">
                            Заказать запчасть
                        </button>
                    </p>
                    <div class="collapse" id="collapse-order">
                        <div class="card card-body">
                            <form class="drop-form" action="{{route('addDetail')}}" method="post">

                                <div class="form-group" >
                                    <select class="form-control" size="1" name="address" required="">
                                        <option value="" selected="" disabled="">Выберите адрес дома:</option>
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
                                    <input class="form-control" type="text" placeholder="Название детали:" name="detailName" required="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Серийный номен:" name="number" required="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Примечания" name="notice">
                                </div>
                                <div class="form-group">

                                    <select class="form-control" type="text" name="condition" required="">
                                        <option value="нужно заказать">нужно заказать</option>
                                        <option value="ожидание">в пути</option>
                                        <option value="доставлено">доставлено</option>
                                        <option value="акт подписан">акт подписан</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <button class=" btn color_but_blue" type="submit">
                                        Отправить
                                    </button>
                                     {{csrf_field()}}
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="tabs main-tabs">
                    <ul class="nav nav-tabs" id="mainTab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active " id="ordered-tab" data-toggle="tab" href="#ordered" role="tab" aria-controls="ordered" aria-selected="true">Заказано</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="needOrder-tab" data-toggle="tab" href="#needOrder" role="tab" aria-controls="needOrder" aria-selected="false">Необходимо</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="payed-tab" data-toggle="tab" href="#payed" role="tab" aria-controls="payed" aria-selected="false">Акт подписан</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="ordered" role="tabpanel" aria-labelledby="ordered-tab">
                            <ul id="notes" class="notes">
                                    @foreach($detailsWait as $detail)
                                <li class="col">
                                    <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')}}</span></p>
                                    <p class="address">Адрес: <span>{{$detail->address}}</span></p>
                                    <p class="part">Запчасть: <span>{{$detail->detailName}}</span></p>

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$detail->id}}">Подробнее</button>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="needOrder" role="tabpanel" aria-labelledby="needOrder-tab">
                            <ul id="notes" class="notes">
                                @foreach($detailsStart as $detail)
                                <li class="col">
                                    <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')}}</span></p>
                                    <p class="address">Адрес: <span>{{$detail->address}}</span></p>
                                    <p class="part">Запчасть: <span>{{$detail->detailName}}</span></p>

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$detail->id}}">Подробнее</button>

                                </li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="payed" role="tabpanel" aria-labelledby="payed-tab">

                            <ul id="notes" class="notes">
                                 @foreach($detailsAkt as $detail)
                                <li class="col">
                                    <p class="date">Дата заявки: <span>{{Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')}}</span></p>
                                    <p class="address">Адрес: <span>{{$detail->address}}</span></p>
                                    <p class="part">Запчасть: <span>{{$detail->detailName}}</span></p>

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#stopped-{{$detail->id}}">Подробнее</button>

                                </li>
                                  @endforeach
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
              @foreach($detailAll as $detail) 
            <div class="modals">
                <div class="modal fade" id="stopped-{{$detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Информация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="sub-title">Дата заказа: <span>{{Carbon\Carbon::parse($detail ->updated_at )->format('d-m-Y ')}}</span></p>
                <p class="sub-title">Адрес: <span>{{$detail->address}}</span></p>
                <p class="sub-title">Запчасть: <span>{{$detail->detailName}}</span></p>
                <p class="sub-title">Серийный номер: <span>{{$detail ->number}}</span></p>
                <p class="sub-title">Текущее состояние: <span>{{$detail ->condition}}</span></p>

                <form class="modal-form" method="post"  action="{{route('detailUpdate')}}" >
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Изменить состояние заказа:</label>
                        <select class="form-control" id="exampleFormControlSelect2" name="condition" size="1">
                            <option value="ожидание">в пути</option>
                            <option value="нужно заказать">нужно заказать</option>
                            <option value="доставлено">доставлено</option>
                            <option value="акт подписан">акт подписан</option>
                        </select>
                    </div>

                  
                    <input type="hidden" name='id' value="{{$detail -> id}}">   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Запчасть получена!</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</div>            </div>
        </div>
    </div>
  @endforeach

@endsection
