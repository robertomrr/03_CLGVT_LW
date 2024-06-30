<?php

use App\Livewire\CounterController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreatePostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EnderecoController;


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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/counter', CounterController::class);
Route::get('/posts', CreatePostController::class);
require __DIR__.'/auth.php';


// User
Route::view('index-user', 'Users-View');
Route::get('/menu', [UserController::class, 'menu'])->name('user.menu');
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
// Endereço
Route::view('index-endereco', 'user.endereco.user-endereco-view');
Route::get('/menu', [EnderecoController::class, 'menu'])->name('endereco.menu');
Route::get('/enderecos', [EnderecoController::class, 'index'])->name('endereco.index');
Route::get('/endereco/create', [EnderecoController::class, 'create'])->name('endereco.create');
Route::post('/endereco/store', [EnderecoController::class, 'store'])->name('endereco.store');
Route::get('/endereco/{id}', [EnderecoController::class, 'show'])->name('endereco.show');
Route::get('/endereco/{id}/edit', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::put('/endereco/{id}/update', [EnderecoController::class, 'update'])->name('endereco.update');
Route::delete('/endereco/{id}/destroy', [EnderecoController::class, 'destroy'])->name('endereco.destroy');