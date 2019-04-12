@extends('principal')
@section('secciones')

    <div class="container my-4">
    <h1 class="display-4">Notas</h1></div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
      <td></td>
    </tr>
    @endforeach()
    
  </tbody>
</table>
@endsection
