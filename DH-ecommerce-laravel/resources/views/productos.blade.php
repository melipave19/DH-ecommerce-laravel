
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
                  @else
                      <a href="{{ route('login') }}">Ingresá</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Registrarte</a>
                      @endif
                  @endauth
              </div>
          @endif
        </li>

    </ul>
  </div>
  </nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="listadoProducts.php#products1" class="text-danger">Notebooks</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Dell, HP, Bangho</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products1'">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="listadoProducts.php#products2" class="text-danger">Netbooks</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Acer, Lenovo </p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products2'">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><a href="listadoProducts.php#products3" class="text-danger">Accesorios</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Phillip, Sony, Genius, JBL</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products3'">Comprar</button></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="listadoProducts.php#products4" class="text-danger">Ultrabooks</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Samsung, Vaio</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products4'">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="listadoProducts.php#products5" class="text-danger">Desktops</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>Personaliza tu PC</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products5'">Comprar</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><a href="listadoProducts.php#products6" class="text-danger">SALE %</a></div>
        <div class="panel-body"><img src="storage/imagenes/imagen9.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>10% 20% 30% OFF</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='ecommerce-detalleProducts.php#products6'">Comprar</button></div>
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
