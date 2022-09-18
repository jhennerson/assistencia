<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', [HomeController::class, 'goHome']);
Route::get('/parceiros', [PartnersController::class, 'goPartners']);
Route::get('/empresa', [CompanyController::class, 'goCompany']);
Route::get('/servicos', [ServicesController::class, 'goServices']);
Route::get('/contato', [ContactController::class, 'goContact']);


Route::get('/login/{dia}/{mes}/{ano}', function ($dia, $mes, $ano) {
    return view('site.login', ['dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
});


Route::get('/vendas/{mes}/{ano}', [VendasController::class, 'relatorio']);
Route::get('/vendas/produtos', [VendasController::class, 'produtos']);
Route::get('/vendas/checkout', [VendasController::class, 'checkout']);