<?php

use App\Http\Controllers\Privileges\PermissionController;
use App\Http\Controllers\Privileges\RoleController;
use App\Http\Controllers\Privileges\UserContoller;
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
    return view('/welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/permissions', PermissionController::class)->names('permissions');

Route::resource('/roles', RoleController::class)->names('roles');

Route::resource('/users', UserContoller::class)->names('users');