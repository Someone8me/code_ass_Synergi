<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Synergi\UsersController;
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

Route::get('/',[UsersController::class,'create'])->name('users.create');
Route::get('/synergi_users/create',[UsersController::class,'create'])->name('users.create');
Route::post('/synergi_users/store',[UsersController::class,'store'])->name('users.store');
Route::get('/synergi_users/edit/{id}',[UsersController::class,'edit'])->name('users.edit');
Route::get('/synergi_users',[UsersController::class,'thankyou'])->name('users.thankyou');
