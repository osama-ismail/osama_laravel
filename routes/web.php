<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;


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

Route::get('/',[UserController::class,'userLogin'])->name('user.login');
Route::post('user/check',[UserController::class,'check'])->name('user.check');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    return view('test');
});
Route::get('/test',[TestController::class,'test']);
Route::get('/categories',[categoryController::class,'categories'])->name('categories');
 
Route::get('/category/create',[categoryController::class,'addCategory']);

Route::post('category/store',[categoryController::class,'storeCategory'])->name('category.store');
// -----------
Route::get('job/create',[JobsController::class,'create'])->name('job.create');
Route::post('job/store',[JobsController::class,'store'])->name('job.store');
Route::get('jobs/allJobs',[JobsController::class,'allJobs'])->name('allJobs');
Route::post('jobs/delete',[JobsController::class,'delete'])->name('job.delete');

Route::get('department/create',[DepartmentController::class,'create'])->name('department.create');
Route::post('department/store',[DepartmentController::class,'store'])->name('department.store');
Route::get('departments',[DepartmentController::class,'allDepartments'])->name('departments.all');
Route::delete('department/delete',[DepartmentController::class,'delete'])->name('department.delete');
// Route::get('department/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete');
Route::get('department/edit/{department_id}',[DepartmentController::class,'edit'])->name('department.edit');
Route::put('department/update',[DepartmentController::class,'update'])->name('department.update');
// Route::view("login",'login');
// Route::post("user",[UserAuth::class,'userLogin']);

// Route::post('user/login/accept',[UserController::class,'check'])->name('user.check');
//admin
Route::get('user/add',[UserController::class,'add'])->name('choices.add');
Route::get('user/editEmployee',[UserController::class,'allEmployees'])->name('choices.editEmployee');
Route::get('user/updatePassword',[UserController::class,'updatePassword'])->name('choices.updatePassword');
Route::get('user/showLeaving',[UserController::class,'showLeaving'])->name('choices.showLeaving');
Route::post('user/store',[UserController::class,'store'])->name('user.store');

Route::get('user',[UserController::class,'allEmployees'])->name('employee.all');
Route::delete('user/delete',[UserController::class,'delete'])->name('user.delete');
// Route::get('department/delete/{id}',[DepartmentController::class,'delete'])->name('department.delete');
Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('user/update',[UserController::class,'update'])->name('user.update');
Route::get('user/edit1/{id}',[UserController::class,'edit1'])->name('user.edit1');
Route::put('user/update1',[UserController::class,'update1'])->name('user.update1');
