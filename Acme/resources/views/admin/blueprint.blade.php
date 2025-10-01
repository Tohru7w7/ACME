@extends('admin.layouts.main')

<!-- Debe de llamarse igual que el yield-->
@section('content')
<div class="d-flex justify-content-between">
    <h1>Plano</h1>
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar
      </button>
    </div>
</div>
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="p-4"></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Version</th>
      <th scope="col">Número de hoja</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($blueprint as $item)
        <tr>
            <td>{{$item -> id}}</td>
            <td>{{$item -> project_id}}</td>
            <td>{{$item -> name_blueprint}}</td>
            <td>{{$item -> document}}</td>
            <td>{{$item -> version}}</td>
            <td>{{$item -> sheet}}</td>
            <td>
                <button class="btn btn-danger btnEliminar" 
                data-id="{{ $item->id }}"
                data-toggle="modal" data-target="#modalDelete">
                <i class="a fa-trash"></i>
                </button>
            </td>
            
        </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/blueprint" method="POST">
        @csrf
      <div class="modal-body">
        <form><div class="form-group">
    <label for="name_blueprint">Nombre</label>
    <input value="{{ old('name_blueprint') }}" name="name_blueprint" type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <form><div class="form-group">
    <label for="document">Descripción</label>
    <input value="{{ old('document') }}" name="document" type="text" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="version">Version</label>
    <input value="{{ old('version') }}" name="version" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="sheet">Número de hoja</label>
    <input name="sheet" type="text" class="form-control" id="sheet" aria-describedby="emailHelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/dashboard/users" method="POST">
        @csrf
      <div class="modal-body">
        <h2>¿Deseas eliminar el registro?</h2>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script>
        //alert("Hola")
        $(document).ready(function(){
          $(".btnEliminar").on('click',function(event){
              var id= $(this).data('id')
                alert(id)
          });
        });
    </script>
@endsection