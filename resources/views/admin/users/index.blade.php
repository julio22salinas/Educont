@extends ('principal')


@section('secciones')

<br/>
<h1>Listado de usuarios</h1>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

  
</body>
</html>
<table class="table table-striped">
    <thead>
    <th>ID</th>
    <th>Documento</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Rol</th>
    <!--<th>Contraseña</th>-->
    <th>Celular</th>
    <th>Email</th>
    <th>Estado</th>
    <th>Accion</th>
    </thead>

    <tbody >
        @foreach($users as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->doc}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->ape}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->celular}}</td>
      <td>{{$item->email}}</td>
      
      <td>

        <!--{{$item->estado}}-->
        @if($item->estado == "Habilitado" )
        <span class="progress-bar progress-bar-striped bg-success">{{$item->estado}}</span>
        @else
        <span class="progress-bar progress-b  ar-striped bg-danger">{{$item->estado}}</span>

        @endif()
         
      </td>
      <td>
      <a href="{{route('users.edit', $item->id)}}" ><img src="https://img.icons8.com/color/48/000000/edit.png" height="30" width="30"></a>
      <a href="{{route('admin.users.destroy', $item->id)}}" onclick="return confirm('¿Desea Eliminar Este Registro?')"><img src="https://img.icons8.com/color/48/000000/cancel.png" height="30" width="30"></a>
      </td>
     

    </tr>
        @endforeach()
    </tbody>

</table>

{!! $users -> render() !!}
<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a>

@endsection()