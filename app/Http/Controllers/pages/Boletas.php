<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Boleta;
use Illuminate\Support\Facades\Hash;


class Boletas extends Controller
{
  public function index()
  {
    $boletas = Boleta::all();


    return view('content.pages.boletas', ['boletas'=>$boletas]);
  }
  public function create()
  {
    return view('content.pages.boletas-create');
  }
  public function store(Request $request)
  {
    $validator = $request->validate([
      'nombre' => 'required',
      'nit' => 'required',
      'telefono' => 'required',
      'direccion' => 'required'
    ]);

      $boleta = new Boleta();
      $boleta->nombre = $request->nombre;
      $boleta->nit = $request->nit;
      $boleta->telefono = $request->telefono;
      $boleta->direccion = $request->direccion;
      $boleta->save();
      return redirect()->route('pages-clientes');
  }
  public function show($boleta_id)
  {
    $boleta = Boleta::find($boleta_id);
    return view('content.pages.boletas-show',['boleta'=>$boleta]);
  }
  public function update(Request $request)
  {
    $boleta = Boleta::find($request->cliente_id);
    $boleta->nombre = $request->nombre;
    $boleta->nit = $request->nit;
    $boleta->telefono = $request->telefono;
    $boleta->direccion = $request->direccion;

    $boleta->save();
    return redirect()->route('pages-boletas');
  }
  public function destroy($boleta_id)
  {
    $boleta = Boleta::find($boleta_id);
    $boleta->delete();
    return redirect()->route('pages-boletas');
  }


}
