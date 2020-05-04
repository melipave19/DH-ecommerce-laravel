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
                                {{ __('Salir') }}
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
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      	<!-- Indicators -->
      	<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#myCarousel" data-slide-to="1"></li>
        	<li data-target="#myCarousel" data-slide-to="2"></li>
      	</ol>
      	<!-- Wrapper for slides -->
      	<div class="carousel-inner" style="margin-bottom: 20px;">
        	<div class="item active">
          	<img src="storage/imagenes/imagen1.jpg" alt="notebook" style="width:100%;">
        	</div>
        	<div class="item">
          	<img src="storage/imagenes/imagen2.jpg" alt="computer" style="width:100%;">
        	</div>
        	<div class="item">
          	<img src="storage/imagenes/imagen3.jpg" alt="laptop" style="width:100%;">
        	</div>
      	</div>
      	<!-- Left and right controls -->
      	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
        	<span class="glyphicon glyphicon-chevron-left"></span>
        	<span class="sr-only">Previous</span>
      	</a>
      	<a class="right carousel-control" href="#myCarousel" data-slide="next">
        	<span class="glyphicon glyphicon-chevron-right"></span>
        	<span class="sr-only">Next</span>
      	</a>
    	</div>

</div>

<div class="container">
    	<h2 id="faqs" class="text-center">Preguntas frecuentes</h2>
    	<div class="panel-group" id="accordion">
      	<div class="panel panel-default">
        	<div class="panel-heading">
          	<h4 class="panel-title">
            	<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">¿Cómo puedo saber cuándo y a qué hora llegará mi compra?</a>
          	</h4>
        	</div>
        	<div id="collapse1" class="panel-collapse collapse in">
          	<div class="panel-body">Puedes hacer seguimiento de tu despacho con el número de orden de despacho que encuentras
               en la boleta de tu compra. Ahí encontrarás toda la información que necesitas para saber cuándo llegarán
                tus productos.</div>
        	</div>
      	</div>
      	<div class="panel panel-default">
        	<div class="panel-heading">
          	<h4 class="panel-title">
            	<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">¿Puedo cambiar la fecha o dirección de mi despacho?</a>
          	</h4>
        	</div>
        	<div id="collapse2" class="panel-collapse collapse">
          	<div class="panel-body">Por su seguridad, una vez realizada la compra no es posible realizar un cambio de dirección</div>
        	</div>
      	</div>
      	<div class="panel panel-default">
        	<div class="panel-heading">
          	<h4 class="panel-title">
            	<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">¿Qué hago si no llegaron todos los productos que compré?</a>
          	</h4>
        	</div>
        	<div id="collapse3" class="panel-collapse collapse">
          	<div class="panel-body">Si compras más de un producto, existe la posibilidad de que los recibas en despachos y fechas diferentes.
               Revisa en la boleta o solicitud de compras las fechas correspondientes o llámanos al Servicio al Cliente al 011 1515151515 </div>
        	</div>
      	</div>
    	</div>
</div>
<!-- Contact Section -->
<h2 class="text-center" id="contact">CONTACTO</h2>
<div class="container bg-grey well">
	<div class="row">
    	<div class="col-sm-5">
    	<p>Contáctanos y te responderemos dentro de las 24 horas.</p>
    	<p><span class="glyphicon glyphicon-map-marker"></span> Argentina, Bs As</p>
    	<p><span class="glyphicon glyphicon-phone"></span> 011 1515151515</p>
    	<p><span class="glyphicon glyphicon-envelope"></span> tiendaonline@gmail.com</p>
    	</div>
    	<div class="col-sm-7">
    	<div class="row">
        	<div class="col-sm-6 form-group">
        	<input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
        	</div>
        	<div class="col-sm-6 form-group">
        	<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        	</div>
    	</div>
    	<textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario" rows="5"></textarea><br>
    	<div class="row">
        	<div class="col-sm-12 form-group">
        	<button class="btn btn-default pull-right" type="submit">Enviar</button>
        	</div>
    	</div>
    	</div>
	</div>
	</div>
<!--<footer class="container-fluid text-center">
	<div class="container">
        	<div>
            	<div class="well">
                	<form class="form-inline">Get deals:
                    	<input type="email" class="form-control" size="50" placeholder="Email Address">
                    	<button type="button" class="btn btn-danger">Submit</button>
                	</form>
            	</div>
        	</div>
    	</div>
  <p>EquipoFoo</p>
</footer> -->
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
