<style>
body{
  background-color:  #ecf4fd ;
}
.navbar-default{
  background-color: $bgDefault;
  border-color: $bgHighlight;
}
      /* Remove the navbar's default rounded borders and increase the bottom margin */
      .navbar {
        margin-bottom: 50px;
        border-radius: 0;
      }

      /* Remove the jumbotron's default bottom margin */
       .jumbotron {
        margin-bottom: 0;
      }

      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }/* Modal */
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
      	<title>Detalle</title>
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


       <div class="container" id="products1">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen4.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK BANGHO ZERO M4 INTEL J3160 4G SSD-240G 14" FREE</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>Notebook ideal para uso básico, práctica y liviana para transportar.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'" >Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products2">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen5.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK DELL INSPIRON 3593 I7 1065G1 8GB SSD256GB 15.6 GEFORCE MX230 2GB DDR5</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>La nueva Dell Inspiron 15 3593, posee un diseño moderno, auténtico con líneas que marcan la tendencia de última generación en Notebooks Dell. Acompañada con componentes de última generación y tecnología fiable. </p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'">Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products3">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen6.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK LENOVO V130 INTEL PENTIUM N5000 4G 500G 15.6 FREE</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>Ampliá tus posibilidades con la nueva generación de procesadores Intel Pentium. La notebook Lenovo ideal para tareas en la escuela o el hogar. Lista para ofrecerte el óptimo rendimiento en programas y software de oficina y navegación.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'">Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products4">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen7.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK HP HP14-CB011WM CLOUDBOOK CELERON N 3060</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>Con un diseño ligero y superdelgado. esta laptop nunca se pensó para quedarse quieta. Es fácil de transportar y tiene un color brillante poco tradicional para ofrecer un estilo personal distintivo.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'">Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products5">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen8.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK ACER A315-54-559AR INTEL CORE I5 DISCO DE 1TB Y RAM DE 4GB</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'">Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products6">
         <div class="row">
           <section class= "col-md-5">
             <img src="/storage/imagenes/imagen9.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>NOTEBOOK LENOVO IPS130 64GB CELERON CLOUDBOOK</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Descripción</div>
      <div class="panel-body"><p>La elección inteligente para lo esencial. Si buscas una laptop ultradelgada y potente que tenga un precio que puedas pagar y no te deje en números rojos. échale un vistazo a la IdeaPad S130. Esta portátil. fácil de usar y pensada para durar. cuenta con una autonomía prolongada de la batería y un dise;o elegante. fino y liviano.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button" onclick="location.href='ecommerce-cart.php'">Comprar ahora</button>
           </section>
         </div>
       </div>
       <br>
       <br>
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
