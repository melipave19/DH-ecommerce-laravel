<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>Peliculas</title>
  </head>
  <body>
    <h1>
    @if (isset($array))
      Hola
    @else
        No esta definido $array!
    @endif
    @if (count($array)!=0)
      Listado de Peliculas
    @else
    @empty ($array)
      No hay peliculas para mostrar
    @endempty
    @endif


    </h1>
    <ul>
      @foreach ($array as $key => $value)
        <li>{{$value[0]}}
        @unless ($value[1]<8)
          . Recomendada
        @endunless
      </li>
      @endforeach

    </ul>
  </body>
</html>
