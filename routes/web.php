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
// Route::get('/', [RegisterController::class,'index']);


//======================================================




//=========================Admin Controller Route ======================================
// Route::get('/home', [AdminController::class, 'navbar']);
// Route::get('/course', [AdminController::class, 'course']);
Route::get('/addquiz', [AdminController::class, 'addquiz'])->middleware('user');
Route::get('/showques', [AdminController::class, 'showques'])->middleware('user');
Route::get('/result', [AdminController::class, 'result'])->middleware('user');
Route::get('/urank', [AdminController::class, 'urank'])->middleware('user');

//============================================================






//======================Database admin Controller Route ===================================

Route::post('/ustore', [DatabaseController::class,'store'])->name('ustore.user');
Route::get('/user/delete/{id}',[DatabaseController::class, 'delete'])->name('customer.delete')->middleware('admin');
Route::get('/user', [DatabaseController::class, 'view'])->middleware('admin');
Route::post('/addcourse', [DatabaseController::class,'addcourse'])->name('addcourse.adcrse')->middleware('admin');
Route::get('/course', [DatabaseController::class, 'courseview'])->middleware('admin');
Route::get('/course/delete/{id}', [DatabaseController::class, 'coursedelete' ])->name('course.delete')->middleware('admin');
Route::post('/course/edit/{id}', [DatabaseController::class, 'courseedit' ])->name('course.edit')->middleware('admin');
Route::post('/createques', [DatabaseController::class, 'addquiz'])->name('createques.ques')->middleware('admin');
Route::get('/removequiz', [DatabaseController::class, 'viewquiz'])->middleware('admin');
Route::get('/removequiz/delete/{id}', [DatabaseController::class , 'delquiz'])->name('removequiz.delete')->middleware('admin');
Route::post('/quizquestion',[DatabaseController::class, 'saveQuiz'])->name('save-quiz')->middleware('admin');
Route::get('/viewquestion/{id}',[DatabaseController::class, 'showquestion'])->name('view-question')->middleware('admin');
Route::get('/showques', [DatabaseController::class, 'showques'])->middleware('admin');


//=======================Admin Login  Details=======================

Route::get('/adminlogin',[DatabaseController::class,'adminlogin']);
Route::post('/adminl',[DatabaseController::class,'adminl']);
Route::get('/adminlogout',[DatabaseController::class,'adminlogout'])->name('admin.logout');


//====================User Loginn Details==============================

Route::get('/userlogin',[DatabaseController::class,'userlogin']);
Route::post('/userl',[DatabaseController::class,'userl']);
Route::get('/userlogout',[DatabaseController::class,'userlogout'])->name('user.logout');
Route::post('/ustore', [DatabaseController::class,'store'])->name('ustore.user');



//================================Database user Controller Route ============================================

Route::get('/ucourse', [DatabaseController::class, 'ucoursesview'])->middleware('user');
Route::get('/uhome', [DatabaseController::class, 'uhome'])->middleware('user');
Route::get('/uquizes', [DatabaseController::class, 'quizstart'])->middleware('user');
Route::get('/ucours', [DatabaseController::class, 'ucourssview'])->middleware('user');

