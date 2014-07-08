@extends ('layout')

@section ('title') {{$hotel->name}} @stop

@section ('content')

<h1>{{$hotel->name}}</h1>

<div class="row">
  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="../assets/images/2.jpg" alt="hotel">
    </a>
  </div>
<p class="text-center col-xs-6 col-md-4 lead">{{$hotel->location}}</p>
<p class="text-center col-xs-6 col-md-4 lead">{{$hotel->capacity}} Habitaciones</p>
</div>
<p class="col-md-12">{{$hotel->description}}</p>
<p>
  <a href="{{ route('hotel.index')}}" class="btn btn-danger" role="button">Volver atrás</a>
  <a href="{{ route('booking.create')}}" class="btn btn-success" role="button">Reservar</a>
</p>
@stop
