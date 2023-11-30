<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\PageController;
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
    return view('Home');
});
////////////////////////////////nav-bar/////////////////////////////////////
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
//////////////////////////////////////////////////////////////////////////
Route::get('/house', [HouseController::class, 'index'])->name('house.index');
Route::get('/house/show', [HouseController::class, 'show'])->name('house.show');
Route::get('/house/create', [HouseController::class, 'create'])->name('house.create');
Route::post('/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/house/{house}/edit', [HouseController::class, 'edit'])->name('house.edit');
Route::put('/house/{house}/update', [HouseController::class, 'update'])->name('house.update');
Route::delete('/house/{house}/destroy', [HouseController::class, 'destroy'])->name('house.destroy');
//////////////////////////////////////////////////////////////////////////
