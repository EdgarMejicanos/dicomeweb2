@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Clientes')

@section('content')
<h4>Clientes registrados</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
      <a  href="{{route('pages-clientes-create')}}" class="btn btn-primary" style="text-color">Crear</a>
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
       @foreach ($clientes as $cliente)

          <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->nit}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->created_at}}</td>
            <td><a href="{{route('pages-clientes-show', $cliente->id)}}">Editar</a> | <a href="{{route('pages-clientes-destroy', $cliente->id)}}">Borrar</a></td>

          </tr>

       @endforeach


      </tbody>
    </table>
  </div>
</div>
@endsection
