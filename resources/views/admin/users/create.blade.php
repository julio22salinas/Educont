<br/>
@extends ('principal')

@section('secciones')
<br/>
<h1>Registro</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach()
        </ul>
    </div>
@endif()


{!! Form::open(['route'=>'users.store','method'=>'post'])!!}

    <div class="form-group">
    {!!Form::label('doc','Documento')!!}
    {!!Form::text('doc', null, ['class'=>'form-control', 'placeholder'=>'Numero de Documento','required'] )!!}
    </div>
    <div class="form-group"> 
    {!!Form::label('name','Nombres')!!}
    {!!Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Nombres','required'])!!}
    </div>
    <div class="form-group">
    {!!Form::label('ape','Apellidos')!!}
    {!!Form::text('ape',null, ['class'=>'form-control', 'placeholder'=>'apellidos','required'])!!}
    </div>

    <div class="form-group"> 
    {!!Form::label('type','Rol')!!}
    {!! Form::select('type',[''=>'Seleccione Rol','Participante' => 'Participante', 'CoordinadorSem' => 'Coordinador de Seminarios', 'CoordinadorRec'=>'Coordinador de Recursos'],null, ['class'=>'form-control']) !!} 

    </div>
    <div class="form-group">
    {!!Form::label('password','Contraseña')!!}
    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'*************','required'])!!}
    </div>
    <div class="form-group"> 
    {!!Form::label('celular','Celular')!!}
    {!!Form::number('celular',null, ['class'=>'form-control', 'placeholder'=>'Numero de celular','required'])!!}
    </div>
    <div class="form-group"> 
    {!!Form::label('email','Email')!!}
    {!!Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Ingrese su email','required'])!!}
    </div>
    <div class="form-group">
    {!!Form::label('estado','Estado')!!}
    {!! Form::select('estado',[''=>'Seleccione Estado','Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'],null, ['class'=>'form-control']) !!}
    </div>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

{!! Form::close()!!}

@endsection()