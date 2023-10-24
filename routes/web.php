<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Auth\Events\Login;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', [PagesController::class, '']);
Route::get('/', [HomeController::class, 'home']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/dashboard', [PagesController::class, 'dashboard']);

Route::group(['middleware' => ['authWeb']], function () {
    Route::get('/dashboard', [PagesController::class, 'dashboard']);
    Route::get('/dashboard/inventaris', [InventarisController::class, 'index'])->name('datainventaris');
    // Route::resource('/dashboard/inventaris', InventarisController::class);
});

Route::get('/logout', [LoginController::class, "logout"]);

//Route::get('/', [AuthController::class, 'index']);

//Login
//Route::post('/login/petugas', [AuthController::class, "login"]);


/*Route::get('/inventarisir', [PagesController::class, 'inventarisir']);
Route::get('peminjaman', [PagesController::class, 'peminjaman']);
Route::get('/pengembalian', [PagesController::class, 'pengembalian']);
Route::get('/laporan', [PagesController::class, 'laporan']);*/
