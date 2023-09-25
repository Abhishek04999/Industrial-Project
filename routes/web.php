<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [RegisterController::class,'index']);
// Route::get('/home', [AdminController::class, 'navbar']);
Route::get('/course', [AdminController::class, 'course']);
Route::get('/addquiz', [AdminController::class, 'addquiz']);
Route::get('/user', [AdminController::class, 'user']);
Route::get('/removequiz', [AdminController::class, 'removequiz']);
Route::post('/createques', [AdminController::class, 'createques'])->name('createques.ques');

