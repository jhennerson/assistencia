<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;

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
Route::get('/clientes', [CustomersController::class, 'goCustomers']);
Route::any('/loja', [ShopController::class, 'goShop']);
Route::any('/entrar', [SignInController::class, 'goSignIn']);
Route::any('/cadastro', [SignUpController::class, 'goSignUp']);