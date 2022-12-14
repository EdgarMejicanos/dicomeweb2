@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Usuarios')

@section('content')
@role('admin')
<h4>Empleados registrados</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
      <a  href="{{route('pages-users-create')}}" class="btn btn-primary" style="text-color">Crear</a>
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>Creado en</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
       @foreach ($users as $user)

          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              @if($user->hasRole('admin'))
                <a href="{{route('pages-users-switch-role', $user->id)}}">
                <span class="badge bg-primary">Admin</span></a>
              @else
              <a href="{{route('pages-users-switch-role', $user->id)}}">
                <span class="badge bg-success">Tecnico</span></a>

              @endif
              </td>
            <td>{{$user->created_at}}</td>
            <td><a href="{{route('pages-users-show', $user->id)}}">Editar</a> | <a href="{{route('pages-users-destroy', $user->id)}}">Borrar</a></td>

          </tr>

       @endforeach


      </tbody>
    </table>
  </div>
</div>
@endrole
@role('tecnico')
 <div class="card">
    <h1>No tienes permisos para ver esta sección.</h1>
    <p>Si crees que esto es un error puedes contactar con el administrador.</p>
 </div>
@endrole
@endsection
