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
}
