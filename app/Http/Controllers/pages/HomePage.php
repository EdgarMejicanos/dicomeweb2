<?php

namespace App\Http\Controllers\pages;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Cliente, User};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class HomePage extends Controller
{
  public function index()
  {

    $user = Auth::user();
    $roleifexist = DB::table('model_has_roles')->where('model_id', $user->id)->first();

    if(!$roleifexist)
    {
      DB::table('model_has_roles')->insert([
        'role_id' => 2,
        'model_type' => 'App\Models\User',
        'model_id' => $user->id
      ]);

    }
    //$n_cliente = Cliente::where('active', true)->count();
    //$n_user = User::where('active', true)->count();

    return view('content.pages.pages-home');
  }
}
