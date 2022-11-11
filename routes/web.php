<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages

// Route::get('/public', function(Request $request){
//   dd('Hola');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

    //usuarios
    Route::get('/users', $controller_path . '\pages\Users@index')->name('pages-users');
    Route::get('/users/create', $controller_path . '\pages\Users@create')->name('pages-users-create');
    Route::post('users/store', $controller_path . '\pages\Users@store')->name('pages-users-store');
    Route::get('/users/show/{user_id}', $controller_path . '\pages\Users@show')->name('pages-users-show');
    Route::post('/users/update', $controller_path . '\pages\Users@update')->name('pages-users-update');
    Route::get('/users/destroy/{user_id}', $controller_path . '\pages\Users@destroy')->name('pages-users-destroy');

    //clientes
    Route::get('/clientes', $controller_path . '\pages\Clientes@index')->name('pages-clientes');
    Route::get('/clientes/create', $controller_path . '\pages\Clientes@create')->name('pages-clientes-create');
    Route::post('clientes/store', $controller_path . '\pages\Clientes@store')->name('pages-clientes-store');
    Route::get('/clientes/show/{cliente_id}', $controller_path . '\pages\Clientes@show')->name('pages-clientes-show');
    Route::post('/clientes/update', $controller_path . '\pages\Clientes@update')->name('pages-clientes-update');
    Route::get('/clientes/destroy/{cliente_id}', $controller_path . '\pages\Clientes@destroy')->name('pages-clientes-destroy');
});
