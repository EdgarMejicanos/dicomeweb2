@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear boleta')

@section('content')
<h4>Creando una boleta nueva</h4>

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
      <form method="POST" action="{{route('pages-boletas-store')}}">
      @csrf
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Nit</label>
          <input type="text" name="nit" class="form-control" id="basic-default-fullname" placeholder="123456-6" required/>
          <div class="form-text">Presione Tab para encontrar al cliente.</div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Nombre del cliente</label>
          <input type="text" name="nombre_cliente" class="form-control" id="basic-default-company" placeholder="Ramon Valdez" required/>
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

    <h4>Añadiendo un equipo</h4>

  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('pages-boletas-store')}}">
      @csrf
        <div class="mb-3">
          <label class="form-label" for="basic-default-fullname">Tipo de equipo</label>
          <input type="text" name="equipo" class="form-control" id="basic-default-fullname" placeholder="Laptop/Tablet/Escritorio" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-company">Marca</label>
          <input type="text" name="marca" class="form-control" id="basic-default-company" placeholder="Dell/Toshiba/HP/Asus" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">No. serie</label>
            <input type="text"  name="serie"  class="form-control" placeholder="S/N f8xl3rf" >
          </div>
        <div class="mb-3">
          <label class="form-label" for="basic-default-email">Problema</label>
          <div class="input-group input-group-merge">
            <input type="text"  name="descripcion"  class="form-control" placeholder="Ejemplo: No enciende, Deja cargador, etc." >
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Costo en Q</label>
            <div class="input-group input-group-merge">
              <input type="text"  name="costo"  class="form-control" placeholder="Q75.00"  required>
            </div>

          <div class="form-text"> Complete los campos correctamente </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>

  <h4>Equipos registrados</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Equipo</th>
          <th>Marca</th>
          <th>Serie</th>
          <th>Descripcion</th>
          <th>Costo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       {{-- @foreach ($detalle_boletas as $detalle_boleta)

          <tr>
            <td>{{$detalle_boleta->id}}</td>
            <td>{{$detalle_boleta->equipo}}</td>
            <td>{{$detalle_boleta->marca}}</td>
            <td>{{$detalle_boleta->serie}}</td>
            <td>{{$detalle_boleta->descripcion}}</td>
            <td>{{$detalle_boleta->costo}}</td>
            <td><a href="{{route('pages-boletas-show', $detalle_boleta->id)}}">Editar</a> | <a href="{{route('pages-boletas-destroy', $detalle_boleta->id)}}">Borrar</a></td>

          </tr>

       @endforeach --}}

      </tbody>
    </table>
  </div>
</div>

</div>


@endsection
