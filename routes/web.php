<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProduitController;
use Database\Seeders\CategorySeeder;

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

Route::get('/', [CategoryController::class, "GetAll"]);

Route::post("/AddCategory", [CategoryController::class, "store"]);

Route::get('/EditCategory/{id}', [CategoryController::class, "EditView"]);

Route::put('/UpdateCategory/{id}', [CategoryController::class, "UpdateView"]);

Route::delete('/DeleteCategory/{id}', [CategoryController::class, "Delete"]);

Route::get('/produit', [ProduitController::class, "index"]);

Route::post('/AddProduit', [ProduitController::class, "store"]);

Route::get('/EditProduit/{id}', [ProduitController::class, "Edit"]);

Route::put('/UpdateProduit/{id}', [ProduitController::class, "Update"]);

Route::delete('/DeleteProduit/{id}', [ProduitController::class, "Delete"]);
