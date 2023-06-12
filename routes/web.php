<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
//modif
    Route::prefix('/Sagna1')->group(function(){
        Route::get('/', [SagnaController::class, 'index'])->name('Sagna1');
    });




});


/* login Admin route*/
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/loginadmin', [AdminController::class, 'login']);
Route::post('/loginadmin', [AdminController::class, 'connect']);
Route::get('/logout', [AdminController::class, 'logout']);



