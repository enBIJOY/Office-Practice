<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});

Route::post('create/', [ClientController::class, 'create'])->name('create');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-register', [AuthController::class, 'postRegistration'])->name('post.register');
Route::get('show/',[ClientController::class, 'show'])->name('show');
Route::get('edit/{id}', [ClientController::class, 'edit'])->name('edit');
Route::post('update/{id}', [ClientController::class, 'update'])->name('update');
Route::delete('client/delete/{id}', [ClientController::class, 'clientDelete'])->name('client.Delete');

// Route::get('register/', [RegistrationController::class, 'register'])->name('register');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('name')->middleware('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

