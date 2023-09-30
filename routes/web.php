<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatabaseController;
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

//===================================================
Route::get('/', [RegisterController::class,'index']);


//======================================================




//=========================Admin Controller Route ======================================
// Route::get('/home', [AdminController::class, 'navbar']);
// Route::get('/course', [AdminController::class, 'course']);
Route::get('/addquiz', [AdminController::class, 'addquiz']);


Route::get('/showques', [AdminController::class, 'showques']);
Route::get('/result', [AdminController::class, 'result']);

//============================================================






//======================Database Controller Route ===================================
Route::post('/ustore', [DatabaseController::class,'store'])->name('ustore.user');
Route::get('/user/delete/{id}',[DatabaseController::class, 'delete'])->name('customer.delete');
Route::get('/user', [DatabaseController::class, 'view']);
Route::post('/addcourse', [DatabaseController::class,'addcourse'])->name('addcourse.adcrse');
Route::get('/course', [DatabaseController::class, 'courseview']);
Route::get('/course/delete/{id}', [DatabaseController::class, 'coursedelete' ])->name('course.delete');
Route::post('/course/edit/{id}', [DatabaseController::class, 'courseedit' ])->name('course.edit');
Route::post('/createques', [DatabaseController::class, 'addquiz'])->name('createques.ques');
Route::get('/removequiz', [DatabaseController::class, 'viewquiz']);
Route::get('/removequiz/delete/{id}', [DatabaseController::class , 'delquiz'])->name('removequiz.delete');
Route::post('/quizquestion',[DatabaseController::class, 'saveQuiz'])->name('save-quiz');

//============================================================================


