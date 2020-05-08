@extends('layouts.header')

@section('content')
    @if (Auth::user())
  <nav class="container navbar navbar-default secnav">
    <div class="container">
      <ul class="nav navbar-nav bg-grey">
        <li class="active"><a href="#">Mi perfil</a></li>
        <li><a href="#">Direccion</a></li>
        <li><a href="#">Pedidos</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ajustes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Email</a></li>
            <li><a href="#">Direccion</a></li>
            <li><a href="#">Telefono</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <div class=" container panel panel-default">

      <div class="panel-body"> <h3>{{Auth::user()->apellido}}, {{Auth::user()->nombre}}</h3>
        <img src="storage/avatar/{{Auth::user()->foto_perfil}}" class="img-circle" height="75" width="75" alt="Avatar">
      </div>
      <h3>Acciones</h3>
      <ul>
        @if ( Auth::user()->id_permisos == 1 || Auth::user()->id_permisos === 3)
          <li><a href="/productos">Ir al listado de productos</a></li>
        @endif
        @if (Auth::user()->id_permisos == 2 || Auth::user()->id_permisos == 3)
          <li><a href="/productos/agregar">Agregar nuevo producto</a></li>
          <li><a href="/productos/actualizar">Modificar/Eliminar productos</a> </li>
        @endif
      </ul>

  </div>
@else
  <h2>No hay usuario logueado.</h2>
@endif



@endsection
