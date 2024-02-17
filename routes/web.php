<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;

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

//Category

Route::get('/', [CategoryController::class, "GetAll"]);

Route::post("/AddCategory", [CategoryController::class, "store"]);

Route::get('/EditCategory/{id}', [CategoryController::class, "EditView"]);

Route::put('/UpdateCategory/{id}', [CategoryController::class, "UpdateView"]);

Route::delete('/DeleteCategory/{id}', [CategoryController::class, "Delete"]);

//Produit

Route::get('/produit', [ProduitController::class, "index"]);

Route::post('/AddProduit', [ProduitController::class, "store"]);

Route::get('/EditProduit/{id}', [ProduitController::class, "Edit"]);

Route::put('/UpdateProduit/{id}', [ProduitController::class, "Update"]);

Route::delete('/DeleteProduit/{id}', [ProduitController::class, "Delete"]);

//Login

Route::get('/login', [UserController::class, "index"]);

Route::post('/login/post', [UserController::class, "Login"]);

Route::get('/login/newPassword', [LoginController::class, "NewPassword"]);


//Register

Route::get("/register", [LoginController::class, "Register"]);

Route::post("/register/post", [UserController::class, "Register"]);


//ResetPassword

Route::get("/resetPassword/{token}", [LoginController::class, "newPasswordPAge"]);
Route::post("/sendEmail", [LoginController::class, "reset"]);

//CRUD client

Route::get("/Admin/Client", [UserController::class, "ClientIndex"]);

Route::post("/Admin/Client/post", [UserController::class, "Register"]);

Route::get("/Admin/Client/Edit/{id}", [UserController::class, "Edit"]);

Route::put("/Admin/Client/Update/{id}", [UserController::class, "Update"]);

Route::delete("/Admin/Client/Delete/{id}", [UserController::class, "delete"]);


//Products

Route::get("/produitShow", [ProduitController::class, "ProductsIndex"]);
Route::post("/produitShow", [ProduitController::class, "search"]);
