<?php

use App\Http\Controllers\Frontend\HomeController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
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
//admin
Route::resource('service',ServiceController::class);
Route::get('admin/users',[DashboardController::class, 'users'])->name('users');
Route::get('admin/freelancers',[DashboardController::class, 'freelancers'])->name('freelancers');





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/freelancer', [HomeController::class, 'freelancer'])->name('freelancer');
Route::get('freelancer-detail/{id}', [HomeController::class, 'freelancerdetail'])->name('freelancer-detail');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('services-detail/{id}', [HomeController::class, 'servicesdetail'])->name('services-detail');
Route::get('setting', [HomeController::class, 'setting'])->name('setting');
Route::post('setting-post/{id}', [HomeController::class, 'setting_update'])->name('setting-post');
Route::post('book_now/{id}', [HomeController::class, 'book_now'])->name('book_now');
Route::get('about', [HomeController::class, 'about'])->name('about');


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login-post', [AuthController::class, 'postLogin'])->name('login-post');


//user_registration
Route::get('/register',[AuthController::class,'register_create'])->name('user_registration');
Route::post('/register-user',[AuthController::class,'register'])->name('register-user');
