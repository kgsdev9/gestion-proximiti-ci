<?php

namespace App\Http\Controllers\Admin\Invoice;

use App\Exports\ArtisanExport;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

use App\Exports\ArtisanExportExport;
use Maatwebsite\Excel\Facades\Excel;

class InvoiceController extends Controller
{
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
        $pdf = Pdf::loadView('admin.invoice.artisans.fiche', [
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


    // if($request->view_type === 'download') {
    //     $pdf = PDF::loadView('users.report', ['users' => $users]);
    //     return $pdf->download('users.pdf');
    // } else {
    //     $view = View('users.report', ['users' => $users]);
    //     $pdf = \App::make('dompdf.wrapper');
    //     $pdf->loadHTML($view->render());
    //     return $pdf->stream();
    // }


}
