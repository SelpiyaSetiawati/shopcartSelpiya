<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::get('/tampilan', function () {
    return view('tampilan1');
});

Route::post('auth',[UserController::class,'auth']);


Route::get('register',[UserController::class,'register']);
Route::post('register/daftar',[UserController::class,'daftar']);
Route::get('logout', [UserController::class,'logout']);


Route::middleware('auth')->group(function () {
Route::get('admin', [UserController::class,'show']);
Route::get('home', [UserController::class,'view']);
Route::get('produk', [ProdukController::class,'show']);
Route::get('produk/add', [ProdukController::class,'add']);
// Route::get('cart/{id}', [ProdukController::class,'cart']);
Route::post('produk/create', [ProdukController::class,'create']);
Route::get('produk/delete/{item}', [ProdukController::class,'hapus']);
Route::get('produk/edit/{id}', [ProdukController::class,'edit']);
Route::post('produk/update/{id}', [ProdukController::class,'update']);
Route::get('tampilan1', [ProdukController::class,'view']);
Route::get('produk/view/{id}', [ProdukController::class,'cart']);


});

