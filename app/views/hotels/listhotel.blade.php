@extends ('layout')

@section ('title') Hoteles @stop

@section ('content')

<h1>Lista de Hoteles</h1>

<div class="row">
	@foreach($hotels as $hotel)
  		<div class="col-sm-6 col-md-4">
   		 		<div class="thumbnail">
     				<img data-src="holder.js/300x300" src="assets/images/{{$hotel->id}}.jpg" alt="imageOfHotel"/>
      				<div class="caption">
       					<h3>{{$hotel->name}}</h3>
       					<p>{{$hotel->location}}</p>
        				<p>
        					<a href="{{ route('hotel.show',$hotel->id)}}" class="btn btn-primary" role="button">Ver</a> 
        					<a href="{{ route('booking.create')}}" class="btn btn-success" role="button">Reservar</a>
        				</p>
     				</div>
   	 			</div>
   	 	</div>
   	 @endforeach
</div>

@stop
