<?php

use App\Http\Controllers\sukiController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

/* rute gde se pravi f-ja */
/* Route::get('/', function () {
    return view('suki');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function() {
    return view('login');
})->name('login'); */

/* rute sa parametrima */
Route::get('/', [sukiController::class, 'show']);
Route::get('/register', [userController::class, 'regShow'])->name('register');
Route::get('/login', [userController::class, 'logShow'])->name('login');

Route::get('/posts/{id}', function($id) {
    return response("Post " . $id);
})->where('id', '[0-9]+');

Route::post('/user', [userController::class, 'getDataLogin'])->name('users');
// Route::view('login', 'login');

Route::post('/userRegister', [userController::class, 'getDataRegister'])->name('usersRegister');
Route::view('register', 'register');


