<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @if ($id<0 || $id>count($array))
      El numero de pelicula es inválido.
    @else
      @foreach ($array as $key => $value)
        @if ($key == $id)
          <h1>
            Pelicula: {{$value[0]}}
          </h1>
          <h2>
            Rating: {{$value[1]}}
          </h2>
        @endif
      @endforeach
    @endif


  </body>
</html>
