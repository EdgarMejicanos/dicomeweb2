@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<h4>Cambios desde local</h4>
<h2>Este contenido es publico</h2>
@role('admin')
<h2>Contenido solo para admin</h2>
@endrole
@role('tecnico')
<h2>Contenido solo para tecnico</h2>
@endrole
@role('vendedor')
<h2>Contenido solo para vendedor</h2>
@endrole
<div class="row">
  <div class="col-xl-2">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-edit fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Clientes</span>
        <h2 class="mb-0">0</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-dock-top fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Usuarios</span>
        <h2 class="mb-0">0</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-message-square-detail fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Boletas</span>
        <h2 class="mb-0">0</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 ">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-cube fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Sales</span>
        <h2 class="mb-0">0</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 ">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-purchase-tag fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Purchase</span>
        <h2 class="mb-0">0</h2>
      </div>
    </div>
  </div>

</div>

@endsection
