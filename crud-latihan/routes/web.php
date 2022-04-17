<?php

use App\Http\Controllers\EmployeeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'employee', 'as' => 'employee.'], function(){
    Route::get('/', [EmployeeController::class, 'index'])->name('home');
});

//home
Route::get('/', [EmployeeController::class, 'index'])->name('home');

//buat
Route::get('/buat', [EmployeeController::class, 'create'])->name('employee.tambah-data');
Route::post('/buat-data', [EmployeeController::class, 'store'])->name('employee.buat-data');

//edit
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');

//detail
Route::get('/detail/{id}', [EmployeeController::class, 'show'])->name('employee.show');

//delete
Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');