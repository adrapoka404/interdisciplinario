<?php

use App\Http\Controllers\Admin\CategoriasController;
use App\Http\Controllers\Admin\EditoresController;
use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Admin\ProductosController;
use Illuminate\Support\Facades\Route;
use App\Http\ivewire\ShowPosts;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['auth:anctum','verified'])->get('/productos',function(){
        return view('productos');
    })->name('productos');

    Route::resource('editores', EditoresController::class)->names('editores');
    Route::resource('noticias', NoticiasController::class)->names('noticias');
    Route::resource('productos', ProductosController::class)->names('productos');
    Route::resource('categorias', CategoriasController::class)->names('categorias');
});

