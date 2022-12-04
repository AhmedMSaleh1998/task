<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('admin/handleLogin', [AuthController::class, 'handleLogin'])->name('admin.handlelogin');

Route::middleware('auth:admin')->group(function(){
    Route::get('admin/index', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('task/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('task/index', [TaskController::class, 'index'])->name('task.index');
});
