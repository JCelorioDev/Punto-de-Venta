<?php

namespace App\Http\Controllers;

use App\Models\SistemaVentas;
use Illuminate\Http\Request;


class SistemaVentasController extends Controller
{
   public function Index(){
    $V = SistemaVentas::all();
    return view('Venta.ventanaprincipal',compact('V'));
   }

   public function Guardar(Request $request){
    $Ventas = new SistemaVentas();
    $Ventas->Nombre_Producto = $request->nombre_produc;
    $Ventas->Cantidad = $request->cantidad_produc;
    $Ventas->Foto = $request->imagen_produc;
    $Ventas->save();
    return back();
   }

   public function PagEdicion($Id){
      $Ventas = SistemaVentas::find($Id);
      return view('Venta.ventanasecundaria',compact('Ventas'));
   }

   public function Update(Request $request, $Id){
      $Ventas = SistemaVentas::find($Id);
      $Ventas->Nombre_Producto = $request->nombre_produc;
      $Ventas->Cantidad = $request->cantidad_produc;
      $Ventas->Foto = $request->imagen_produc;
      $Ventas->save();
      return redirect('Ventas');
   }
}
