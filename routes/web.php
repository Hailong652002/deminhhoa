<?php
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('student/store',[StudentController::class,'store'])->name('store');
Route::get('student', [StudentController::class,'get_all_students']) -> name('student.index');
Route::post('student_update/{id}', [StudentController::class,'update'])->name('update');
Route::get('student/{id}/edit',[StudentController::class,'get_student_by_id'])->name('edit');
Route::post('student/{id}',[StudentController::class,'delete'])->name('delete');
