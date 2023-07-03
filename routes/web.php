<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\petController;

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
    return view('welcome');
});

Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'loginAccount'])->name('login');

Route::get('/register', [authController::class, 'register'])->name('register');
Route::post('/register', [authController::class, 'registerAccount'])->name('register');

//Pets Route
Route::get('dashboard/pets', [petController::class, 'petDash'])->name('pets.index');
Route::resource('dashboard/pets', petController::class);

Route::get('dashboard/createPet', [petController::class, 'create'])->name('create.pets');
Route::post('dashboard/createPet', [petController::class, 'store'])->name('store.pets');

Route::get('dashboard/edit/{id}', [petController::class, 'edit'])->name('edit.pet');
Route::post('dashboard/edit/{id}', [petController::class, 'update'])->name('update.pet');

Route::get('dashboard/deletePet/{id}', [petController::class, 'destroy'])->name('delete.pets');


//Staff Route
Route::get('dashboard/staff', [petController::class, 'petDash'])->name('staff.index');
Route::resource('dashboard/staff', petController::class);

Route::get('dashboard/createStaff', [petController::class, 'create'])->name('create.staff');
Route::post('dashboard/createStaff', [petController::class, 'store'])->name('store.staff');

Route::get('dashboard/edit/staff/{id}', [petController::class, 'edit'])->name('edit.staff');
Route::post('dashboard/edit/staff/{id}', [petController::class, 'update'])->name('update.staff');

Route::get('dashboard/deleteStaff/{id}', [petController::class, 'destroy'])->name('delete.staff');