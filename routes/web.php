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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/employee')->group(function(){
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::get('/{employee}', [EmployeeController::class, 'show'])->name('employee.show');
    Route::post('/', [EmployeeController::class, 'store'])->name('employee.store');
    Route::post('/update/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::post('/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employee.delete');
});
