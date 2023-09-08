<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Exports\ArtisanExport;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

use App\Exports\ArtisanExportExport;
use App\Mail\SendInvoiceMail;
use App\Models\Commande;
use App\Models\Mission;
use App\Models\TCommandeArticle;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class InvoiceController extends Controller
{

    public function invoiceMission($id) {
        $ressource = Mission::find($id);


        $pdf = Pdf::loadView('missions.invoices.mission', [
            'ressource' =>$ressource
        ])->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->download('mission.pdf');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function render($id) {

        $ressource = Artisan::find($id);
        $pdf = Pdf::loadView('livewire.commande.downloadorder', [
            'ressource' =>$ressource
        ])->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('fiche.pdf');
    }


    public function renderArisanAllExcell() {
        return Excel::download(new ArtisanExport, 'artisan.xlsx');

    }

    public function renderArisanAllPDF() {

        $ressource = Artisan::all();
        $pdf = Pdf::loadView('admin.invoice.artisans.liste', [
            'ressource' =>$ressource
        ])->setOptions(['defaultFont' => 'sans-serif',]);
        return $pdf->download('artisanliste.pdf');


    }


    // $commande=  Commande::findOrFail($id);
    // $data=TCommandeArticle::where('commande_id', '=', $commande->id)->get();

    // // dd($data);

    // $pdf = Pdf::loadView('livewire.commande.downloadorder', [
    //     'ressource' =>$data,
    //     'commande' =>$commande
    // ]);


    public function attach_email($id){


        $commande=  Commande::findOrFail($id);
         $data=TCommandeArticle::where('commande_id', '=', $commande->id)->get();

        $info = ['info'=>$data];

        Mail::send(['text'=>'mail'], $info, function($message){

            $pdf = PDF::loadView('livewire.commande.downloadorder');

            $message->to('kgsdev8@gmail.com','KGSDEV')->subject('Send Mail from Laravel');

            // $message->from('kgssss@gmail.com','The Sender');

            $message->attachData($pdf->output(), 'filename.pdf');

        });

      }

    public function sendInvoice($id) {
      $commande=  Commande::findOrFail($id);
      $data=TCommandeArticle::where('commande_id', '=', $commande->id)->get();

         $commandes = Pdf::loadView('livewire.commande.missionssendGmail', [
             'commande' =>$commande
        ]);

        $to_email = [
            'kgsdev8@gmail.com',
            'kahouoguystephane@gmail.com'
        ];


        Mail::to($to_email)->send(new SendInvoiceMail($commande));
        return redirect()->back();
      }

    }



    // if($request->view_type === 'download') {
    //     $pdf = PDF::loadView('users.report', ['users' => $users]);
    //     return $pdf->download('users.pdf');
    // } else {
    //     $view = View('users.report', ['users' => $users]);
    //     $pdf = \App::make('dompdf.wrapper');
    //     $pdf->loadHTML($view->render());
    //     return $pdf->stream();
    // }



