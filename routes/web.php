<?php

use App\Http\Controllers\Admin\Artisan\ArtisanController;
use App\Http\Controllers\Admin\Invoice\InvoiceController;
use App\Http\Controllers\Admin\PropositionController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Api\Mission\MissionController;
use App\Http\Controllers\Artisan\Specialite\SpecialiteController;
use App\Http\Controllers\Calendar\CalendarController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Fournisseur\FournisseurController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Notifcation\PhoneNumberNotificationController;
use App\Http\Controllers\Notification\Phone\PhoneNotificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\AuthController;
use App\Http\Livewire\Commande\CommandeController;
use App\Http\Livewire\DetailCommande;
use App\Http\Livewire\Equipement\EquipementRessource;
use App\Http\Livewire\Notifcation\PhoneNumberNotification;
use App\Http\Livewire\PortailAutrise;


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



Route::resources([
    'users' => UserController::class,
    'artisan' => ArtisanController::class,
    'specialite'=> SpecialiteController::class,
    'proposition' => PropositionController::class,
    'clients' => ClientController::class,
    'phonenumber' => PhoneNotificationController::class,
    'missions' => MissionController::class
 ]);


 Route::get('/equipement', EquipementRessource::class)->name('equipement');


 Route::get('/annuaire-messagerie', [PhoneNumberNotificationController::class, 'index'])->name('annuaire.messagerie');


Route::post('/send-sms-test', [PhoneNumberNotificationController::class, 'sendSms'])->name('send.sms');

 Route::get('/chars' , [CharsController::class, 'googleLineChart']);


 Route::get('/artisan/get/{id}', [InvoiceController::class, 'render'])->name('invoice.fiche');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::delete('artisan-file/{id}', [HomeController::class, 'deletefile'])->name('unique.files');


Route::get('/annuaire-commande', CommandeController::class)->name('gestion.commande')->middleware('auth');


Route::get('/calendrier', [CalendarController::class, 'calendrier'])->name('calendrier');


Route::get('/artisan-export-excell', [InvoiceController::class, 'renderArisanAllExcell'])->name('artisan.export');

Route::get('/artisan-export-pdf', [InvoiceController::class, 'renderArisanAllPDF'])->name('artisan.pdf');



Route::get('/detail/{id}', [HomeController::class, 'detailCommande']);


Route::get('/detail/commande/{id}', DetailCommande::class)->name('detail.commande');


Route::get('/download-order/{id}', [HomeController::class, 'invoiceOrder'])->name('invoice.order');



Route::get('/send-invoice/{id}', [InvoiceController::class, 'sendInvoice'])->name('send.invoice');


Route::get('/code-authorise-access', PortailAutrise::class);



Route::get('/chars', [ChartsController::class, 'index'])->name('chars');


Route::get('/testesss', function () {
    return view('make');
});


Route::get('/invoice-mission/{id}', [InvoiceController::class, 'invoiceMission'])->name('invoice.missions');

Route::get('/donwload/all/equipment/excell', [InvoiceController::class, 'invoiceAllEquipment'])->name('equipment.download');
Route::get('/donwload/all/equipment/exell', [InvoiceController::class, 'invoiceAllEquipmentExcell'])->name('equipment.excell');






Route::get('/tes-fonctionnality/V1', PhoneNumberNotification::class)->name('test.fonctionnality');




Route::get('/detail-missions/{id}', [HomeController::class, 'detailEnvoi'])->name('detail.sms.send');



