<style>
body{
  background-color:   #ecf4fd ;
}

.navbar-default{
  background-color: $bgDefault;
  border-color: $bgHighlight;
}
.navbar {
  	margin-bottom: 50px;
  	border-radius: 0;
}
.jumbotron {
  	margin-bottom: 0;
	}
/* Add a gray background color and some padding to the footer */
footer {
  	background-color: #f2f2f2;
  	padding: 25px;
	}
  /* Modal */
  @import "bourbon";
  .form-signin {
    	max-width: 380px;
    	margin: 0 auto;
    	background-color: #fff;
  	}
  .form-signin-heading,
     	 .checkbox {
     	   margin-bottom: 30px;
     	 }

     	 .checkbox {
     	   font-weight: normal;
     	 }

     	 .form-control {
     	   position: relative;
     	   font-size: 16px;
     	   height: auto;
     	   padding: 10px;

    	}

     		 .focus {
     		   z-index: 2;
     		 }

     	 input[type="text"] {
     	   margin-bottom: 20px;
     	   border-bottom-left-radius: 0;
     	   border-bottom-right-radius: 0;
     	 }

     	 input[type="password"] {
     	   margin-bottom: 20px;
     	   border-top-left-radius: 0;
     	   border-top-right-radius: 0;
     	 }


  </style>
  <!DOCTYPE html>
  <html lang="en">
  <head>
	<title>Productos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="jumbotron" style="margin-bottom: 0px;">
	<div class="container text-center">
  	<h1 id="home">Tienda Online</h1>
  	<p>Poder y tecnología a tu alcance</p>
	</div>
  </div>

  <nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
  	<div class="navbar-header">
    	<a class="navbar-brand" href="#">Logo</a>
  	</div>
  	<ul class="nav navbar-nav">
      	<li class=""><a href="ecommerce-index.php">Inicio</a></li>
      	<li><a href="ecommerce-products.php">Productos</a></li>
      	<li><a href="ecommerce-index.php#faqs">Preguntas frecuentes</a></li>
      	<li><a href="ecommerce-index.php#contact">Contacto</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
          @if (Route::has('login'))
              <div >
                  @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li>
                      <a href="./ecommerce-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Mi carrito</a>
                    </li>
                    <ul class="nav navbar-nav">
                      <div class="container-fluid">
                      <div class="navbar-header">
                  @else
                    <li class=""><a href="{{ route('login') }}">Ingresá</a></li>

                      @if (Route::has('register'))
                        <li class="">  <a href="{{ route('register') }}">Registrarte</a></li>
                      @endif
                  @endauth
                    </ul>
              </div>
          @endif
        </li>
</div>
</div>
    </ul>
  </div>
  </nav>

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



<div class="container-fixed">
    <!--- Footer ------------>
    <footer class="footer-bs">
      	<div class="row">
     		 <div class="col-md-3 footer-brand animated fadeInLeft">
         		 <h2>Tienda Online</h2>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              	<p>© 2019 BS3 UI Kit, All rights reserved</p>
          	</div>
     		 <div class="col-md-4 footer-nav animated fadeInUp">
         		 <h4>Menu</h4>
         		 <div class="col-md-6">
                  	<ul class="pages">
                      	<li><a href="ecommerce-index.php">Inicio</a></li>
                      	<li><a href="ecommerce-products.php">Productos</a></li>
                      	<li><a href="ecommerce-index.php#faqs">Preguntas</a></li>
                      	<li><a href="ecommerce-index.php#contact">Contacto</a></li>
                  	</ul>
              	</div>
         		 <div class="col-md-6">
                  	<ul class="list">
                      	<li><a href="ecommerce-cart.php">Carrito</a></li>
                  	</ul>
              	</div>
          	</div>
     		 <div class="col-md-2 footer-social animated fadeInDown">
         		 <h4>Seguinos</h4>
         		 <ul>
             		 <li><a href="https://www.facebook.com/">Facebook</a></li>
             		 <li><a href="https://twitter.com/">Twitter</a></li>
             		 <li><a href="https://www.instagram.com/">Instagram</a></li>
              	</ul>
          	</div>
     		 <div class="col-md-3 footer-ns animated fadeInRight">
         		 <h4>SUSCRIBITE A NUESTRO NEWSLETTER</h4>
              	<p>Informate de lo último de Tienda Online. Nuestras ofertas y novedades directamente en tu e-mail.</p>
              	<p>
                  	<div class="input-group">
                    	<input type="text" class="form-control" placeholder="Search for...">
                    	<span class="input-group-btn">
                      	<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                    	</span>
                  	</div><!-- /input-group -->
               	</p>
          	</div>
      	</div>
  	</footer>
  	<section style="text-align:center; margin:10px auto;"><p>Designed by <a href="">EquipoFoo</a></p></section>

  </div>
  </body>
  </html>
