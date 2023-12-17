<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TesteController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\RouterDataCollector;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('site.index');
Route::get('/sobre',[SobreController::class,'sobre'])->name('site.sobre');
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function () {
    return 'login';
})->name('site.login');

Route::prefix('/app')->group(function(){ 
    Route::get('/cliente', function () {return 'cliente';})->name('app.cliente');
    Route::get('/fornecedores', [FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'produtos';})->name('app.produtos');
});
Route::get('/teste/{p1}/{p2}', [TesteController::class,'teste'])->name('site.teste');
Route::fallback(function(){echo 'tem algo de errado ai irmao';});
 