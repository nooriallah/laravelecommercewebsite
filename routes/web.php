<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.home');
})->name("homepage");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])-> name('dashboard');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});



// Admin controller
Route::resource("/categories", \App\Http\Controllers\CategoryController::class);

// Product routes
Route::resource("/products", \App\Http\Controllers\ProductController::class);
Route::get("/product/trashed", [\App\Http\Controllers\ProductController::class, "trashed"])->name("products.trashed");
Route::post("/product/{id}/restore/", [\App\Http\Controllers\ProductController::class, "restore"])->name("products.restore");

// Order routes
Route::get("/orders", [\App\Http\Controllers\AdminController::class, "orders"])->name("orders");
Route::get("/delivered/{id}", [\App\Http\Controllers\AdminController::class, "delivered"])->name("delivered");

// Home controller routes
Route::get("/product/addproduct/{id}", [HomeController::class, "addToCart"])->name("addtocart");
Route::get("/product/showcart", [HomeController::class, "showCart"])->name("showcart");
Route::get("/product/removeitem/{id}", [HomeController::class, "removeItem"])->name("removeitem");
Route::get("/product/cashorder", [HomeController::class, "cashOrder"])->name("cashorder");
Route::get("/product/stripepay", [HomeController::class, "stripePay"])->name("stripepay");
