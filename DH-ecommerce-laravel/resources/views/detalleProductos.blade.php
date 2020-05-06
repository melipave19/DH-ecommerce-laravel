@extends('layouts.header')

@section('content')

  <div class="container" id="products">
    <div class="row">
      <section class= "col-md-5">
        <img src="/storage/productos/{{$unEquipo->imagen_principal}}" class="img-responsive" style="width:100%" alt="">
      </section>
      <section class = "col-md-7">
        <h4>{{$unEquipo->nombre_equipo}}</h4>
        <div class="panel panel-warning">
           <div class="panel-heading">{{$unaCategoria->nombre_categoria}}</div>
           <div class="panel-body"><p>{{$unEquipo->descripcion}}</p></div>
           <p><strong>Especificaciones</strong></p>
           <ul>
             <li>Marca: {{$unaMarca->nombre_marca}}</li>
             <li>Tamaño pantalla en pulgadas: {{$unEquipo->tamaño_pantalla}}"</li>
             <li>Capacidad de disco duro (GB): {{$unEquipo->disco_duro}} GB</li>
             <li>Fabricante: {{$unProveedor->razon_social}}</li>
             <li>Cantidad disponible: {{$unEquipo->stock_disponible}}</li>
           </ul>
        </div>
        </section>
        <section class = "col-md-2">
          <div class="panel panel-danger">
            <div class="panel-heading">Precio</div>
            <p><strong>$ {{$unEquipo->precio}}</strong> </p>
          </div>
        </section>
        <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='/carrito'" >Agregar al carrito</button>

    </div>
  </div>
  <br>
  <br>
@endsection
