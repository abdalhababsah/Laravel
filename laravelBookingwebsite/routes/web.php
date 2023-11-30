<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('Home');
});
////////////////////////////////nav-bar/////////////////////////////////////
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
//////////////////////////////////////////////////////////////////////////
Route::get('/leaser/house', [HouseController::class, 'index'])->name('house.index');
Route::get('/leaser/house/show', [HouseController::class, 'show'])->name('house.show');
Route::get('/leaser/house/create', [HouseController::class, 'create'])->name('house.create');
Route::post('/leaser/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/leaser/house/{house}/edit', [HouseController::class, 'edit'])->name('house.edit');
Route::put('/leaser/house/{house}/update', [HouseController::class, 'update'])->name('house.update');
Route::delete('/leaser/house/{house}', [HouseController::class, 'destroy'])->name('house.destroy');
// Route::resource('/leaser/house', HouseController::class);

//////////////////////////////////////////////////////////////////////////


// admin Routes for the users
Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
