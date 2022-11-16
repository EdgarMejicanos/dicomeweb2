@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Boletas')

@section('content')
<h4>Boletas registradas</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
      <a  href="{{route('pages-boletas-create')}}" class="btn btn-primary" style="text-color">Crear</a>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Nit</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Creado en</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       @foreach ($boletas as $boleta)

          <tr>
            <td>{{$boleta->id}}</td>
            <td>{{$boleta->nombre}}</td>
            <td>{{$boleta->nit}}</td>
            <td>{{$boleta->telefono}}</td>
            <td>{{$boleta->direccion}}</td>
            <td>{{$boleta->created_at}}</td>
            <td><a href="{{route('pages-boletas-show', $boleta->id)}}">Editar</a> | <a href="{{route('pages-boletas-destroy', $boleta->id)}}">Borrar</a></td>

          </tr>
       @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
