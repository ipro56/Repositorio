@extends ('layout')

@section ('title') Realiza una reserva @stop

@section ('content')

<h1>Realiza una reserva</h1>

{{ Form::open(array('route' => 'user.store', 'method' => 'POST'), array('role' => 'form')) }}

<div class="row">
  <div class="form-group col-md-10">
    {{ Form::label('email', 'Correo Electrónico') }}
    {{ Form::text('email', null, array('placeholder' => 'Introduce el correo electrónico', 'class' => 'form-control')) }}
  </div>
</div>
<div class="row">
  <div class="form-group col-md-10">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, array('placeholder' => 'Introduce tu nombre', 'class' => 'form-control')) }}
  </div>
</div>
<div class="row">
  <div class="form-group col-md-10">
    {{ Form::label('surname', 'Apellidos') }}
    {{ Form::text('surname', null, array('placeholder' => 'Introduce tus apellidos', 'class' => 'form-control')) }}
  </div>
</div>
<div class="row">
  <div class="form-group col-md-10">
    {{ Form::label('password', 'Contraseña') }}
    {{ Form::password('password', array('placeholder' => 'Introduce tu contraseña', 'class' => 'form-control')) }}
  </div>
</div>

 {{ Form::button('Reservar', array('type' => 'submit', 'class' => 'btn btn-success')) }}
 <a href="{{ route('hotel.index')}}" class="btn btn-danger" role="button">Cancelar</a>
  {{ Form::close() }}
@stop
