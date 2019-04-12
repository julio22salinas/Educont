@extends('principal')
@section('secciones')

<h1>INICIAR SESION</h1>

{!! Form::open(['route'=>['users.show',$user],'method'=>'get'])!!}

    <div class="form-group">
    {!!Form::label('id','ID')!!}
    {!!Form::text('id', null, ['class'=>'form-control', 'placeholder'=>'Identificador','required'] )!!}
    </div>
<div class="form-group">
    {!!Form::label('password','Contraseña')!!}
    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'*************','required'])!!}
    </div>
    {!!Form::submit('INICIAR',['class'=>'btn btn-primary'])!!}

{!! Form::close()!!}
    
@endsection
