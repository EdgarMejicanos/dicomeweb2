@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear cliente')

@section('content')
<h4>Creando un cliente nuevo</h4>

<div class="row">

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('pages-clientes-store')}}">
      @csrf
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="basic-default-fullname" placeholder="Ramon Valdez" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Nit</label>
          <input type="text" name="nit" class="form-control" id="basic-default-company" placeholder="123456-7" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">Teléfono</label>
            <input type="text"  name="telefono" id="basic-default-email" class="form-control" placeholder="1234-5678"  required>
          </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">Dirección</label>
          <div class="input-group input-group-merge">
            <input type="text"  name="direccion" id="basic-default-email" class="form-control" placeholder="Ejemplo: Ciudad"  required>
          </div>

          <div class="form-text"> Complete los campos correctamente </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>

</div>


@endsection
