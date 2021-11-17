<?php

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



Route::get('login', [\App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [\App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [\App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [\App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [\App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [\App\Http\Controllers\CustomAuthController::class, 'dashboard']); 
    Route::resource('photos', \App\Http\Controllers\PhotoController::class);
    Route::resource('student', \App\Http\Controllers\StudentController::class);
    Route::resource('project', \App\Http\Controllers\ProjectsController::class);
});