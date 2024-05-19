<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
    return view('index');
});

Route::resource('students', StudentController::class);
Route::get('/', [App\Http\Controllers\StudentController::class, 'index'])->name('index');

Route::resource('users', UserController::class);

// Route::get('/users', [UserController::class, 'index']);
// Route::post('/adduser', [UserController::class, 'add']);
// Route::get('/delete/{id}', [UserController::class, 'delete']);
// Route::get('/edit/{id}', [UserController::class, 'edit']);
// Route::post('/edit/{id}', [UserController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
