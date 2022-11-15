<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Boleta;
use App\Models\Detalle_boleta;

class Boletas extends Controller
{
  public function index()
  {
    $detalle_boletas = Detalle_boleta::all();


    return view('content.pages.boletas-create', ['detalle_boletas'=>$detalle_boletas]);
  }

  public function store(Request $request)
  {
    $validator = $request->validate([
      'equipo' => 'required',
      'marca' => 'required',
      'costo' => 'required'
    ]);

      $detalle_boleta = new Detalle_boleta();
      $detalle_boleta->equipo = $request->equipo;
      $detalle_boleta->marca = $request->marca;
      $detalle_boleta->serie = $request->serie;
      $detalle_boleta->descripcion = $request->descripcion;
      $detalle_boleta->costo = $request->costo;
      $detalle_boleta->save();
      return redirect()->route('pages-boletas-create');
  }
  public function show($detalle_boleta_id)
  {
    $detalle_boleta = Detalle_boleta::find($detalle_boleta_id);
    return view('content.pages.boletas-show',['detalle_boleta'=>$detalle_boleta]);
  }
  public function update(Request $request)
  {
    $detalle_boleta = Boleta::find($request->cliente_id);
    $detalle_boleta->equipo = $request->equipo;
    $detalle_boleta->marca = $request->marca;
    $detalle_boleta->serie = $request->serie;
    $detalle_boleta->descripcion = $request->descripcion;
    $detalle_boleta->costo = $request->costo;

    $detalle_boleta->save();
    return redirect()->route('pages-boletas');
  }
  public function destroy($detalle_boleta_id)
  {
    $detalle_boleta = Detalle_boleta::find($detalle_boleta_id);
    $detalle_boleta->delete();
    return redirect()->route('pages-boletas-create');
  }


}
