@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Backups: recovery')

@section('content')
<h4>Backups: recovery</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
      <a  href="{{route('pages-clientes-create')}}" class="btn btn-primary" style="text-color">Crear nuevo backup</a>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Estado</th>
          <th>Creado en</th>
          <th>Telefono</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       @foreach ($backups as $backup)

          <tr>
            <td>{{$backup->id}}</td>
            <td>{{$backup->status}}</td>
            <td>{{$backup->created_at}}</td>

            {{-- <td><a href="{{route('pages-clientes-show', $backup->id)}}">Editar</a> | <a href="{{route('pages-clientes-destroy', $backup->id)}}">Borrar</a></td> --}}

          </tr>

       @endforeach


      </tbody>
    </table>
  </div>
</div>
@endsection
