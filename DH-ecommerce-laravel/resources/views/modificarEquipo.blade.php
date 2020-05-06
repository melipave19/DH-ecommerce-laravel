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
	<title>Inicio</title>
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
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <h1>Modificar equipo</h1>

              <div class="card-body">
                  <form method="POST" action="" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$equipoAModificar->id}}">

                      <div class="form-group row">
                          <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                          <div class="col-md-6">
                              <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$equipoAModificar->nombre_equipo}}" required autocomplete="nombre" autofocus>

                              @error('nombre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                          <div class="col-md-6">
                              <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{$equipoAModificar->descripcion }}" required autocomplete="Descripcion" autofocus>

                              @error('descripcion')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                          <div class="col-md-6">
                            <select class="form-control" id="categoria" name="categoria" required>
                              @foreach ($listadoCategorias as $categoria)
                                <option value="{{$categoria->id}}" @if ($categoria->id == $unaCategoria->id)
                                  selected
                                @endif>{{$categoria->nombre_categoria}}</option>
                              @endforeach
                            </select>

                              @error('categoria')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                          <div class="col-md-6">
                            <select class="form-control" id="marca" name="marca" required>
                              @foreach ($listadoMarcas as $marca)
                                <option value="{{$marca->id}}" @if ($marca->id == $unaMarca->id)
                                  selected
                                @endif>{{$marca->nombre_marca}}</option>
                              @endforeach
                            </select>

                              @error('marca')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio ($)') }}</label>

                          <div class="col-md-6">
                              <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{$equipoAModificar->precio}}" required autocomplete="precio">

                              @error('precio')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tamanioPantalla" class="col-md-4 col-form-label text-md-right">{{ __('Tamaño pantalla (pulgadas)') }}</label>

                          <div class="col-md-6">
                              <input id="tamanioPantalla" type="text" class="form-control @error('tamanioPantalla') is-invalid @enderror" name="tamanioPantalla" value="{{$equipoAModificar->tamaño_pantalla}}" required autocomplete="tamanioPantalla" autofocus>

                              @error('tamanioPantalla')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="discoDuro" class="col-md-4 col-form-label text-md-right">{{ __('Disco Duro (GB)') }}</label>

                          <div class="col-md-6">
                              <input id="discoDuro" type="text" class="form-control @error('discoDuro') is-invalid @enderror" name="discoDuro" value="{{$equipoAModificar->disco_duro}}" required autocomplete="discoDuro" autofocus>

                              @error('discoDuro')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="stockDisponible" class="col-md-4 col-form-label text-md-right">{{ __('Stock Disponible') }}</label>

                          <div class="col-md-6">
                              <input id="stockDisponible" type="text" class="form-control @error('stockDisponible') is-invalid @enderror" name="stockDisponible" value="{{$equipoAModificar->stock_disponible}}" required autocomplete="stockDisponible" autofocus>

                              @error('stockDisponible')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="proveedor" class="col-md-4 col-form-label text-md-right">{{ __('Proveedor') }}</label>

                          <div class="col-md-6">
                            <select class="form-control" id="proveedor" name="proveedor" required>
                              @foreach ($listadoProveedores as $proveedor)
                                <option value="{{$proveedor->id}}" @if ($proveedor->id == $unProveedor->id)
                                  selected
                                @endif>{{$proveedor->razon_social}}</option>
                              @endforeach
                            </select>

                              @error('proveedor')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="estaEnOferta" class="col-md-4 col-form-label text-md-right">{{ __('¿Está en oferta?') }}</label>

                          <div class="col-md-6">
                            <input class="form-check-input" type="checkbox" value="1" id="estaEnOferta" @if ($equipoAModificar->esta_en_oferta == 1)
                              checked
                            @endif>
                              <label class="form-check-label" for="estaEnOferta">Si</label>
                              @error('estaEnOferta')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="imagenEquipo" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Principal: ') }}</label>

                        <div class="col-md-6">
                          <img src="/storage/productos/{{$equipoAModificar->imagen_principal}}" class="img-responsive" style="width:100%" alt="Image">
                        </div>
                      </div>



                    <div class="form-group row">
                          <label for="imagenPrincipal" class="col-md-4 col-form-label text-md-right">{{ __('Cambiar imagen ') }}</label>

                          <div class="col-md-6 custom-file">
                              <input id="imagenPrincipal" type="file" class="form-group" name="imagenPrincipal" required autocomplete="imagenPrincipal">
                          </div>
                    </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Modificar') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>





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
         		 <h4>Menu —</h4>
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
