<?php

use App\Http\Controllers\Admin\Artisan\ArtisanController;
use App\Http\Controllers\Admin\Invoice\InvoiceController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Artisan\Specialite\SpecialiteController;
use App\Http\Controllers\CharsController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\AuthController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', AuthController::class)->name('auth.login')->middleware('guest');

// Route::get('/register',)


Route::resources([
    'users' => UserController::class,
    'artisan' => ArtisanController::class,
    'specialite'=> SpecialiteController::class
 ]);

 Route::get('/chars' , [CharsController::class, 'googleLineChart']);


 Route::get('/artisan/get/{id}', [InvoiceController::class, 'render'])->name('invoice.fiche');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
