<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserServiceRequestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::get('/home', [ServiceController::class, 'index'])->name('home');
Route::get('/contact', [ContactUsController::class ,'showContactForm'])->name('contact');
Route::post('/contact', [ContactUsController::class ,'contactUs'])->name('contactus');
Route::view('/contact/success', 'success.blade.php')->name('contact');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/request', [UserServiceRequestController::class, 'store'])->name('service');
});
Route::get('/request', [UserServiceRequestController::class, 'index'])->name('request');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
