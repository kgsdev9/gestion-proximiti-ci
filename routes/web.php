<?php

use App\Exports\ArtisanExport;
use App\Http\Controllers\Admin\Artisan\ArtisanController;
use App\Http\Controllers\Admin\Invoice\InvoiceController;
use App\Http\Controllers\Admin\PropositionController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\AgendaMissionController;
use App\Http\Controllers\Artisan\Specialite\SpecialiteController;
use App\Http\Controllers\CharsController;
use App\Http\Controllers\Fournisseur\FournisseurController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Notifcation\PhoneNumberNotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\AuthController;
use App\Http\Livewire\Commande\CommandeController;
use App\Http\Livewire\DetailCommande;
use App\Http\Livewire\Employees;
use App\Models\TFournisseur;

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
    'specialite'=> SpecialiteController::class,
    'agenda' => AgendaMissionController::class,
    'proposition' => PropositionController::class,
    'fournisseurs' => FournisseurController::class,

 ]);

Route::get('/send-sms-test', [PhoneNumberNotificationController::class, 'sendSms'])->name('send.sms');

 Route::get('/chars' , [CharsController::class, 'googleLineChart']);


 Route::get('/artisan/get/{id}', [InvoiceController::class, 'render'])->name('invoice.fiche');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::delete('artisan-file/{id}', [HomeController::class, 'deletefile'])->name('unique.files');


Route::get('/annuaire-commande', CommandeController::class)->name('gestion.commande')->middleware('auth');



Route::get('/calendrier', function () {
    return view('livewire.home');
});


Route::get('/artisan-export-excell', [InvoiceController::class, 'renderArisanAllExcell'])->name('artisan.export');

Route::get('/artisan-export-pdf', [InvoiceController::class, 'renderArisanAllPDF'])->name('artisan.pdf');

//routes tester les fonctinnalités



// Route::get('/employees', function () {
//     return view('livewire.employees');
// });



Route::get('/employees', Employees::class);

Route::get('/detail/{id}', [HomeController::class, 'detailCommande']);


Route::get('/detail/commande/{id}', DetailCommande::class)->name('detail.commande');


Route::get('/download-order/{id}', [HomeController::class, 'invoiceOrder'])->name('invoice.order');



Route::get('/send-invoice/{id}', [InvoiceController::class, 'sendInvoice'])->name('send.invoice');

