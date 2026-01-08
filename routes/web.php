<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayoutController;


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
    return view('frontend.index');
});



// Route::get('home/', [LayoutController::class, 'home'])->name('layout.home');
Route::get('about/', [LayoutController::class, 'FrontendAbout'])->name('frontend.about');
Route::get('feature/', [LayoutController::class, 'FrontendFeature'])->name('frontend.feature');
Route::get('pricing/', [LayoutController::class, 'FrontendPricing'])->name('frontend.pricing');
Route::get('faq/', [LayoutController::class, 'FrontendFaq'])->name('frontend.faq');
Route::get('home/', [LayoutController::class, 'FrontendHome'])->name('frontend.index');





Route::post('create/', [ClientController::class, 'create'])->name('crud.create');
Route::get('show/',[ClientController::class, 'show'])->name('crud.show');
Route::get('edit/{id}', [ClientController::class, 'edit'])->name('crud.edit');
Route::post('update/{id}', [ClientController::class, 'update'])->name('crud.update');
Route::delete('client/delete/{id}', [ClientController::class, 'clientDelete'])->name('crud.client.Delete');

Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('auth.post.login');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::post('post-register', [AuthController::class, 'postRegistration'])->name('auth.post.register');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard')->middleware('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

