<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;

class Clientes extends Controller
{
  public function index()
  {
    $clientes = Cliente::all();


    return view('content.pages.clientes', ['clientes'=>$clientes]);
  }
  public function create()
  {
    return view('content.pages.clientes-create');
  }
  public function store(Request $request)
  {
    $validator = $request->validate([
      'nombre' => 'required',
      'nit' => 'required',
      'telefono' => 'required',
      'direccion' => 'required'
    ]);

      $cliente = new Cliente();
      $cliente->nombre = $request->nombre;
      $cliente->nit = $request->nit;
      $cliente->telefono = $request->telefono;
      $cliente->direccion = $request->direccion;
      $cliente->save();
      return redirect()->route('pages-clientes');
  }
  public function show($cliente_id)
  {
    $cliente = Cliente::find($cliente_id);
    return view('content.pages.clientes-show',['cliente'=>$cliente]);
  }
  public function update(Request $request)
  {
    $cliente = Cliente::find($request->cliente_id);
    $cliente->nombre = $request->nombre;
    $cliente->nit = $request->nit;
    $cliente->telefono = $request->telefono;
    $cliente->direccion = $request->direccion;

    $cliente->save();
    return redirect()->route('pages-clientes');
  }
  public function destroy($cliente_id)
  {
    $cliente = Cliente::find($cliente_id);
    $cliente->delete();
    return redirect()->route('pages-clientes');
  }
}
