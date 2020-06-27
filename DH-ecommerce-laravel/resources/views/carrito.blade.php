@extends('layouts.header')

@section('content')
  <div class="container">
      	<table id="cart" class="table table-hover table-condensed">
              <thead>
                  <tr>
                      <th style="width:100%">Productos</th>

                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td data-th="Productos">
                          <div class="row ">
                              <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                              <div class="col-sm-10">
                                  <h4 class="nomargin">Producto 1 Nombre</h4>
                                  <p>Detalle del producto</p>
                              </div>
                          </div>
                      </td>
                      <td data-th="Precio">$99.99</td>
                      <td data-th="Cantidad">
                          <input type="number" class="form-control" value="1">
                      </td>
                      <td data-th="Subtotal">99.99</td>
                      <td class="actions" data-th="">
          <button type="button" class="btn btn-primary" aria-label="Left Align">
              <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-danger" aria-label="Left Align">
              <span class=" glyphicon glyphicon-trash" aria-hidden="true"></span>
          </button>
                      </td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr class="visible-xs">
                      <td class="text-center"><strong>Total 99.99</strong></td>
                  </tr>
                  <tr>
                      <td><a href="./ecommerce-products.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>Ver mas productos</a></td>
                      <td colspan="2" class="hidden-xs"></td>
                      <td class="hidden-xs text-center"><strong>Total $99.99</strong></td>
                      <td><a href="#" class="btn btn-success btn-block">Comprar<i class="fa fa-angle-right"></i></a></td>
                  </tr>
              </tfoot>
          </table>
      </div>

@endsection
