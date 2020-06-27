@extends('layouts.header')

@section('content')

   <div class="container">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      	<!-- Indicators -->
      	<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#myCarousel" data-slide-to="1"></li>
        	<li data-target="#myCarousel" data-slide-to="2"></li>
      	</ol>
      	<!-- Wrapper for slides -->
      	<div class="carousel-inner">
        	<div class="item active carrusel">
          	<img src="storage/carrusel/imagen1.jpg" class="img-responsive" alt="notebook">
        	</div>
        	<div class="item carrusel">
          	<img src="storage/carrusel/imagen2.jpg" class="img-responsive" alt="computer">
        	</div>
        	<div class="item carrusel">
          	<img src="storage/carrusel/imagen3.jpg" class="img-responsive" alt="laptop">
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
@endsection
