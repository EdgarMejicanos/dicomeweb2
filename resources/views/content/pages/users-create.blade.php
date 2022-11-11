@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear usuario')

@section('content')
<h4>Creando un usuario nuevo</h4>

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
      <form method="POST" action="{{route('pages-users-store')}}">
      @csrf
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Nombre completo</label>
          <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Joaquín Orellana" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Email</label>
          <input type="text" name="email" class="form-control" id="basic-default-company" placeholder="ejemplo@ejemplo.com" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">Contraseña</label>
          <div class="input-group input-group-merge">
            <input type="password"  name="password" id="basic-default-email" class="form-control" placeholder="Ingresa tu contraseña" aria-label="john.doe" required>
          </div>
          <div class="form-text"> Puedes usar letras, números y signos. </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>

</div>


@endsection
