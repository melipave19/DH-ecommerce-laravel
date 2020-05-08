
@extends('layouts.header')

@section('content')
  <div class="container">
    <div class="row">
      @foreach ($listadoEquipos as $equipo)
        @if ($equipo->habilitado == 1)
          @if ($equipo->esta_en_oferta == 0)
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <p class="panel-heading" >{{$equipo->nombre_equipo}}</p>
                <img src="storage/productos/{{$equipo->imagen_principal}}" class="img-responsive" style="width:100%" alt="Image">
                <p>{{$equipo->descripcion}}</p>
                <a class="panel-footer" href="/detalle/{{$equipo->id}}" role="button">{{$equipo->nombre_equipo}}</a>
              </div>
            </div>
          @else
            <div class="col-sm-4">
              <div class="panel panel-danger">
                <p class="panel-heading" >{{$equipo->nombre_equipo}} - <strong>OFERTA</strong></p>
                <img src="storage/productos/{{$equipo->imagen_principal}}" class="img-responsive" style="width:100%" alt="Image">
                <p>{{$equipo->descripcion}}</p>
                <a class="panel-footer" href="/detalle/{{$equipo->id}}" role="button">{{$equipo->nombre_equipo}}</a>
              </div>
            </div>
          @endif
      @endif
        @endforeach
    </div>
  </div>

@endsection
