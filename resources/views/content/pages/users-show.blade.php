@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Editar usuario')

@section('content')
<h4>Editando un usuario</h4>

<div class="row">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('pages-users-update')}}">
      @csrf
      <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Nombre completo</label>
          <input type="text" name="name" value="{{$user->name}}" class="form-control" id="basic-default-fullname" placeholder="Joaquín Orellana" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Email</label>
          <input type="text" name="email" value="{{$user->email}}" class="form-control" id="basic-default-company" placeholder="ejemplo@ejemplo.com" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">Nueva contraseña</label>
          <div class="input-group input-group-merge">
            <input type="password"  name="new_password" id="basic-default-email" class="form-control" placeholder="Ingresa la nueva contraseña deseada" aria-label="john.doe" >
          </div>
          <div class="form-text"> Puedes usar letras, números y signos. </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>

</div>


@endsection
