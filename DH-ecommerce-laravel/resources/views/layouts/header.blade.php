<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Inicio</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="/css/header.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="jumbotron" style="margin-bottom:0px; padding-top:0px; padding-bottom:0px;">
  	<div class="container text-center">
    	<h1 id="home">Tienda Online</h1>
    	<p>Poder y tecnología a tu alcance</p>
  	</div>
    </div>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
                  data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Menú</a>
    </div>
  	<div class="collapse navbar-collapse navbar-ex1-collapse">
    	<ul class="nav navbar-nav">
        	<li class=""><a href="/inicio">Inicio</a></li>
        	<li><a href="/productos">Productos</a></li>
        	<li><a href="/inicio#faqs">Preguntas frecuentes</a></li>
        	<li><a href="/inicio#contact">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
            @if (Route::has('login'))
                <div >
                    @auth
                      <li class="dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              {{ Auth::user()->nombre }} <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
                              <li><a class="dropdown-item" href="/inicio"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Salir') }}
                              </a></li>
                              <form id="logout-form" action="/inicio" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </ul>
                      </li>
                      <li>
                        <a href="/carrito"><span class="glyphicon glyphicon-shopping-cart"></span> Mi carrito</a>
                      </li>

                    @else
                      <li class=""><a href="{{ route('login') }}">Ingresar</a></li>

                        @if (Route::has('register'))
                          <li class="">  <a href="{{ route('register') }}">Registrarte</a></li>
                        @endif
                        <li>
                          <a href="/carrito"><span class="glyphicon glyphicon-shopping-cart"></span> Mi carrito</a>
                        </li>
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

    <main class="py-4">
        @yield('content')
    </main>

    <div class="container-fixed">
    	<!--- Footer ------------>
    	<footer class="footer-bs">
        	<div class="row">
       		 <div class="col-md-3 footer-brand animated fadeInLeft">
           		 <h2>Tienda Online</h2>
              	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
           </div>
       		 <div class="col-md-4 footer-nav animated fadeInUp">
           		 <h4>Menu</h4>
           		 <div class="col-md-6">
                    	<ul class="pages">
                        	<li><a href="/inicio">Inicio</a></li>
                        	<li><a href="/productos">Productos</a></li>
                        	<li><a href="/inicio#faqs">Preguntas</a></li>
                        	<li><a href="/inicio#contact">Contacto</a></li>
                    	</ul>
                	</div>
           		 <div class="col-md-6">
                    	<ul class="list">
                          <li> <a href="/login">Ingresar</a></li>
                          <li> <a href="/register">Registrarte</a></li>
                        	<li><a href="/carrito">Carrito</a></li>
                    	</ul>
                	</div>
            	</div>
       		 <div class="col-md-2 footer-social animated fadeInDown">
           		 <h4>Seguinos</h4>
                <div class="col-md-12">
               		 <ul>
                   		 <li><a href="https://www.facebook.com/">Facebook</a></li>
                   		 <li><a href="https://twitter.com/">Twitter</a></li>
                   		 <li><a href="https://www.instagram.com/">Instagram</a></li>
                    </ul>
            	</div>
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
