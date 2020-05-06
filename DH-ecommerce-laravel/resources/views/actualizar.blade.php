@extends('layouts.header')

@section('content')

    <div class="container">
      <h1>Listado de productos</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Marca</th>
            <th scope="col">Precio ($)</th>
            <th scope="col">Tamaño pantalla (")</th>
            <th scope="col">Disco Duro (GB)</th>
            <th scope="col">Stock Disponible</th>
            <th scope="col">Proveedor</th>
            <th scope="col">¿En oferta?</th>
            <th scope="col">Habilitado</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listadoEquipos as $equipo)
            <tr>
              <td>{{$equipo->nombre_equipo}}</td>
              <td>{{$equipo->descripcion}}</td>
              <td>
                @foreach ($listadoCategorias as $categoria)
                  @if ($equipo->id_categoria == $categoria->id)
                    {{$categoria->nombre_categoria}}
                  @endif
                @endforeach
              </td>
              <td>
                @foreach ($listadoMarcas as $marca)
                  @if ($equipo->id_marca == $marca->id)
                    {{$marca->nombre_marca}}
                  @endif
                @endforeach
              </td>
              <td>${{$equipo->precio}}</td>
              <td>{{$equipo->tamaño_pantalla}}</td>
              <td>{{$equipo->disco_duro}}</td>
              <td>{{$equipo->stock_disponible}}</td>
              <td>
                @foreach ($listadoProveedores as $proveedor)
                  @if ($equipo->id_proveedor == $proveedor->id)
                    {{$proveedor->razon_social}}
                  @endif
                @endforeach
              </td>
              <td>
                @if ($equipo->esta_en_oferta == 1)
                  Si
                @else
                  No
                @endif
              </td>
              <td>
                @if ($equipo->habilitado == 1)
                  Si
                @else
                  No
                @endif
              </td>
              <td><button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='/productos/actualizar/{{$equipo->id}}'" >Modificar</button> </td>
              <td>
              @if ($equipo->habilitado == 1)
                <form class="" action="/productos/darBaja/{{$equipo->id}}" method="post">
                  {{@csrf_field()}}
                  <input type="hidden" name="id" value="{{$equipo->id}}">
                  <button class="btn btn-danger btn-block" type="submit" name="button">Dar baja</button>
                </form>
              @else
                <form class="" action="/productos/darAlta/{{$equipo->id}}" method="post">
                  {{@csrf_field()}}
                  <input type="hidden" name="id" value="{{$equipo->id}}">
                  <button class="btn btn-success btn-block" type="submit" name="button">Dar Alta</button>
                </form>
              @endif
              </td>
            </tr>
          @endforeach
        </tbody>
        {{$listadoEquipos->links()}}
      </table>

    </div>

  @endsection
