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

<div class="content to-content">
  <div class="container">         
    <div class="row">
      <div class="drop-container">
        <p>
          <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapse-toSearch" aria-expanded="false" aria-controls="collapse-toSearch">Поиск</button>
        </p>
        <div class="collapse" id="collapse-toSearch">
          <div class="card card-body">
            <form class="drop-form"  method="get" action="{{route('searchChengeDetail')}}">
              {{-- Form include --}}
                @include('form.request.request')
                {{csrf_field()}}
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="table-responsive-sm">
        <table class="table  table-hover" >
          <thead >
            <tr>
              <th scope="col">Дата</th>
              <th scope="col">Адрес</th>       
              <th scope="col">Проделанная работа</th>       
              <th class="notice" scope="col">Записки механика</th> 
              <th class="notice" scope="col">Механик</th>         
            </tr>
          </thead>
          <tbody>
          @foreach($details as $detail)
            <tr>
              <td>{{ Carbon\Carbon::parse($detail ->date )->format('d-m-Y ')}}</td>
              <td>{{$detail ->address}}-{{$detail ->front}}-{{$detail ->typeLift}}</td>    
              <td>{{$detail ->detail}}</td>
              <td class="notice">{{$detail ->notice}}</td>
              <td class="notice">{{$detail ->human}}</td>

            </tr>
          @endforeach
        </table>
        {{$details->links()}}
      </div>
    </div>
  </div>
</div>
@endsection

