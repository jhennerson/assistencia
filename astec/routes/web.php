<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;

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
    return view('site/home');
});

Route::any('/home', [HomeController::class, 'goHome']);
Route::any('/parceiros', [PartnersController::class, 'goPartners']);
Route::any('/empresa', [CompanyController::class, 'goCompany']);
Route::any('/servicos', [ServicesController::class, 'goServices']);
Route::any('/contato', [ContactController::class, 'goContact']);
Route::any('/clientes', [CustomersController::class, 'goCustomers']);
Route::any('/loja', [ProductController::class, 'cardList']);
Route::any('/entrar', [SignInController::class, 'goSignIn']);
Route::any('/cadastro-usuario', [UserController::class, 'store']);
Route::any('/cadastro-produto', [ProductController::class, 'store']);
Route::any('/cadastro-produto/{id}', [ProductController::class, 'destroy']);
Route::any('/usuarios', [UserController::class, 'list']);
Route::any('/usuarios/{id}/edit', [UserController::class, 'edit']);
Route::any('/usuarios/{id}/update', [UserController::class, 'update']);
Route::any('/usuarios/{id}/delete', [UserController::class, 'destroy']);
Route::any('/produtos', [ProductController::class, 'list']);
Route::any('/produtos/{id}/edit', [ProductController::class, 'edit']);
Route::any('/produtos/{id}/update', [ProductController::class, 'update']);
Route::any('/produtos/{id}/delete', [ProductController::class, 'destroy']);
//Route::any('/comentarios', [CommentController::class, 'list']);