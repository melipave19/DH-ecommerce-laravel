<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Categoria;
use App\Marca;
use App\Proveedor;

class EquipoController extends Controller
{
    public function listadoEquipos(){
      $listadoEquipos = Equipo::all();
      $vac = compact('listadoEquipos');
      return view('productos',$vac);
    }

    public function listadoEquiposActualizar(){
      $listadoEquipos = Equipo::paginate(10);
      $listadoCategorias = Categoria::all();
      $listadoMarcas = Marca::all();
      $listadoProveedores = Proveedor::all();
      $vac = compact('listadoEquipos', 'listadoCategorias','listadoMarcas','listadoProveedores');
      return view('actualizar',$vac);
    }

    public function mostrarEquipo($idProducto){
      $unEquipo = Equipo::find($idProducto);
      $unaCategoria = Categoria::find($unEquipo->id_categoria);
      $unaMarca = Marca::find($unEquipo->id_marca);
      $unProveedor = Proveedor::find($unEquipo->id_proveedor);
      $vac = compact('unEquipo','unaCategoria','unaMarca','unProveedor');
      return view('detalleProductos',$vac);
    }

    public function cargarFormulario(){
      $listadoCategorias = Categoria::all();
      $listadoMarcas = Marca::all();
      $listadoProveedores = Proveedor::all();

      $vac = compact('listadoCategorias','listadoMarcas','listadoProveedores');
      return view('agregarEquipo',$vac);
    }

    public function agregarEquipo(Request $req){
      $estaEnOferta = $req['estaEnOferta'];
      if($estaEnOferta != 1)
      {
        $estaEnOferta = 0;
      }
      $ruta = $req->file('imagenPrincipal')->store("public/productos");
      $nombreArchivo = basename($ruta);

      $nuevoEquipo = new Equipo();
      $nuevoEquipo->nombre_equipo = $req['nombre'];
      $nuevoEquipo->descripcion = $req['descripcion'];
      $nuevoEquipo->id_categoria = $req['categoria'];
      $nuevoEquipo->id_marca = $req['marca'];
      $nuevoEquipo->precio = $req['precio'];
      $nuevoEquipo->tamaño_pantalla = $req['tamanioPantalla'];
      $nuevoEquipo->disco_duro = $req['discoDuro'];
      $nuevoEquipo->stock_disponible = $req['stockDisponible'];
      $nuevoEquipo->id_proveedor = $req['proveedor'];
      $nuevoEquipo->esta_en_oferta = $estaEnOferta;
      $nuevoEquipo->habilitado = 1;
      $nuevoEquipo->imagen_principal = $nombreArchivo;
      $nuevoEquipo->save();
    }

    // Devuelve el equipo a Actualizar y lleva al formulario
    public function actualizarEquipo($idEquipo){
      $listadoCategorias = Categoria::all();
      $listadoMarcas = Marca::all();
      $listadoProveedores = Proveedor::all();

      $equipoAModificar = Equipo::find($idEquipo);
      $unaCategoria = Categoria::find($equipoAModificar->id_categoria);
      $unaMarca = Marca::find($equipoAModificar->id_marca);
      $unProveedor = Proveedor::find($equipoAModificar->id_proveedor);
      $vac = compact('listadoCategorias','listadoMarcas','listadoProveedores','equipoAModificar','unaCategoria','unaMarca','unProveedor');

      return view('modificarEquipo',$vac);
    }

    //Realiza a modificacion del equipos
    public function modificarEquipo(Request $req)
    {
      $estaEnOferta = $req['estaEnOferta'];
      if($estaEnOferta != 1)
      {
        $estaEnOferta = 0;
      }
      if($req->file('imagenPrincipal'))
      {
        $ruta = $req->file('imagenPrincipal')->store("public/productos");
        $nombreArchivo = basename($ruta);
      }

      $nuevoEquipo = new Equipo();
      $nuevoEquipo->id = $req['id']
      $nuevoEquipo->nombre_equipo = $req['nombre'];
      $nuevoEquipo->descripcion = $req['descripcion'];
      $nuevoEquipo->id_categoria = $req['categoria'];
      $nuevoEquipo->id_marca = $req['marca'];
      $nuevoEquipo->precio = $req['precio'];
      $nuevoEquipo->tamaño_pantalla = $req['tamanioPantalla'];
      $nuevoEquipo->disco_duro = $req['discoDuro'];
      $nuevoEquipo->stock_disponible = $req['stockDisponible'];
      $nuevoEquipo->id_proveedor = $req['proveedor'];
      $nuevoEquipo->esta_en_oferta = $estaEnOferta;
      $nuevoEquipo->habilitado = 1;

      $nuevoEquipo->imagen_principal = $nombreArchivo;
      $nuevoEquipo->save();

    }

    public function darBajaEquipo(Request $req) {
      $id = $req['id'];
      $equipo = Equipo::find($id);

      $equipo->habilitado = 0;
      $equipo->save();
      return redirect('/productos/actualizar');
    }

    public function darAltaEquipo(Request $req) {
      $id = $req['id'];
      $equipo = Equipo::find($id);

      $equipo->habilitado = 1;
      $equipo->save();
      return redirect('/productos/actualizar');
    }
}
