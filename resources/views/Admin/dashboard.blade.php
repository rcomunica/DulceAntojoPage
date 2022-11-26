@extends('app')
@section('title', __('Panel'))

@section('content')
@include('Admin/nav')

<div class="fluid-container" style="padding-left: 0rem; padding-right: 0rem; height: 100vh;">
  <br>
  <br>
      <h1>Hola {{auth()->user()->name}}</h1>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

<h4>Clientes Interesados</h4>

<div class="ClientesInteresados" style="max-width: 50%">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Numero</th>
          <th scope="col">Correo</th>
          <th scope="col">Peticion</th>
        </tr>
      </thead>
      <!-- Body -->
      <tbody>
          @foreach ($cliente as $cliente)

            @if ($cliente->status == "contactado")
                <tr class="table-success">
            @else
                <tr>
            @endif
            
              <th scope="row">{{$cliente->id}}</th>
              <td>{{ $cliente->nombre }}</td>
              <td>{{ $cliente->apellido}}</td>
              <td>{{ $cliente->numero}}</td>
              <td>{{ $cliente->correo}}</td>
              <td>{{ $cliente->peticion}}</td>
            
              <!-- Buttons -->

              <td>
                <a class="btn btn-success" href="{{ url('success', $cliente->id) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                <a class="btn btn-warning" href=""><i class="fas fa-edit"></i></a>
                <a class="btn btn-danger" href="{{ url('delete', $cliente->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
</div>
  
  <h4>Registar productos</h4>
  <div style="max-width: 50%" class="RegistroProductos-container">
    <form class="row gy-2 gx-3 align-items-center">
      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInput">Name</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="Nombre del producto">
      </div>
      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
        <div class="input-group">
          <div class="input-group-text">$</div>
          <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Precio">
        </div>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Imagen</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

    </div>
@endsection