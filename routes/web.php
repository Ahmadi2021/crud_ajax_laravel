<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::resource('employee',EmployeeController::class);
Route::get('employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('employee/{id}',[EmployeeController::class,'show'])->name('employee.show');
Route::post('employee',[EmployeeController::class,'store'])->name('employee.store');
Route::get('employe/create',[EmployeeController::class,'create'])->name('employee.create');
Route::delete('employee/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
Route::get('employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
Route::put('employee/{id}',[EmployeeController::class,'update'])->name('employee.update');

Route::get('ajax_index',[EmployeeController::class,'ajax_index'])->name('ajax_index');
