<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

// Route::get('/', function(){
//     return '<h1>Primeira lógica com Laravel</h1>';
// });

Route::get('/produtos', [ProdutoController::class, 'lista']);
Route::get('/listagem', [ProdutoController::class, 'lista']);

Route::get('/produtos/mostra/{id}', [ProdutoController::class, 'mostra']);       //mostra um único elemento do banco


