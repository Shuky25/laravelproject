<?php

use App\Http\Controllers\sukiController;
use App\Http\Controllers\userController;
use Faker\Guesser\Name;
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

/* rute sa parametrima */
Route::get('/', [sukiController::class, 'show'])->name('pocetna');
Route::get('/register', [userController::class, 'regShow'])->name('register');
Route::get('/login', [userController::class, 'logShow'])->name('login');

Route::get('/posts/{id}', function($id) {
    return response("Post " . $id);
})->where('id', '[0-9]+');

Route::post('/login', [userController::class, 'getDataLogin'])->name('getLoginData');
Route::post('/register', [userController::class, 'getDataRegister'])->name('getRegisterData');


