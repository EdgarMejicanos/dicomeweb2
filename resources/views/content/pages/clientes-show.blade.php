@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Editar cliente')

@section('content')
<h4>Editando un usuario</h4>

<div class="row">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('pages-clientes-update')}}">
      @csrf
      <input type="hidden" name="cliente_id" value="{{$cliente->id}}">
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Nombre</label>
          <input type="text" name="nombre" value="{{$cliente->nombre}}" class="form-control" id="basic-default-fullname"  />
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Nit</label>
          <input type="text" name="nit" value="{{$cliente->nit}}" class="form-control" id="basic-default-company"  />
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Telefono</label>
          <input type="text" name="telefono" value="{{$cliente->telefono}}" class="form-control" id="basic-default-company"  />
        </div>

        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Direccion</label>
          <div class="input-group input-group-merge">
          <input type="text" name="direccion" value="{{$cliente->direccion}}" class="form-control" id="basic-default-company"  />
        </div>
          <div class="form-text"> Revisa si la información es correcta antes de guardar.</div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>

</div>


@endsection
