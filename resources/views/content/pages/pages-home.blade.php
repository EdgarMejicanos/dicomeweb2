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
@endsection
