@extends('layouts.header')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Agregar equipo nuevo</h1>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

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
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="Descripcion" autofocus>

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
                                  <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
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
                                  <option value="{{$marca->id}}">{{$marca->nombre_marca}}</option>
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
                                <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio">

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
                                <input id="tamanioPantalla" type="text" class="form-control @error('tamanioPantalla') is-invalid @enderror" name="tamanioPantalla" value="{{ old('tamanioPantalla') }}" required autocomplete="tamanioPantalla" autofocus>

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
                                <input id="discoDuro" type="text" class="form-control @error('discoDuro') is-invalid @enderror" name="discoDuro" value="{{ old('discoDuro') }}" required autocomplete="discoDuro" autofocus>

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
                                <input id="stockDisponible" type="text" class="form-control @error('stockDisponible') is-invalid @enderror" name="stockDisponible" value="{{ old('stockDisponible') }}" required autocomplete="stockDisponible" autofocus>

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
                                  <option value="{{$proveedor->id}}">{{$proveedor->razon_social}}</option>
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
                              <input class="form-check-input" type="checkbox" value="1" name="estaEnOferta">
                                <label class="form-check-label" for="estaEnOferta">Si</label>
                                @error('estaEnOferta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      <div class="form-group row">
                            <label for="imagenPrincipal" class="col-md-4 col-form-label text-md-right">{{ __('Imagen Principal: ') }}</label>

                            <div class="col-md-6 custom-file">
                                <input id="imagenPrincipal" type="file" class="form-group" name="imagenPrincipal" required autocomplete="imagenPrincipal">
                            </div>
                      </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
