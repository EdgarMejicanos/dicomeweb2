<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Cliente, User};
use Ramsey\Uuid\Type\Integer;

class HomePage extends Controller
{
  public function index()
  {
    //$n_cliente = Cliente::where('active', true)->count();
    //$n_user = User::where('active', true)->count();

    return view('content.pages.pages-home');
  }
}
