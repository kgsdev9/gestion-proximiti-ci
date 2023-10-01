<?php

namespace App\Http\Controllers\Home;

use App\Models\Media;
use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Speciality;
use App\Models\TCommandeArticle;
use App\Services\ArtisanService;
use App\Services\MessageService;
use App\Services\StatistiqueService;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    protected $statistiqueService ;
    protected $artisanService;
    protected $messageService ;

    public function __construct(StatistiqueService $statistiqueService, ArtisanService $artisanService, MessageService $messageService)
    {
        $this->middleware(['auth']);
        $this->statistiqueService = $statistiqueService ?? '0';
        $this->artisanService = $artisanService;
        $this->messageService = $messageService;
    }


    public function index()
    {
        return view('welcome', [
            'countArtisan'=> $this->statistiqueService->countArtisans(),
            'countUsers' => $this->statistiqueService->countUsers(),
            'countMissions'=> $this->statistiqueService->countMission(),
            'countEquipment' => $this->statistiqueService->countEquipment(),
            'countCommande' => $this->statistiqueService->countCommande(),
            'countspecialite' => Speciality::count(),
            'listeArisan' => $this->artisanService->all(),
            'getArtisansRandom' => $this->artisanService->getArtisansRandom()
        ]);
    }


    public function detailEnvoi($id) {
        return view('livewire.messages.detail', [
            'singleRessourceMessage'=> $this->messageService->single($id)
        ]);


    }
    public function invoiceOrder($id) {
        $commande=  Commande::findOrFail($id);
        $data=TCommandeArticle::where('commande_id', '=', $commande->id)->get();
        $pdf = Pdf::loadView('livewire.commande.downloadorder', [
            'ressource' =>$data,
            'commande' =>$commande
        ]);
        return $pdf->download('invoice.pdf');
    }


    public function detailCommande($id) {
        $ressource=  Commande::findOrFail($id);

        $data=TCommandeArticle::where('commande_id', '=', $ressource->id)->get();
        return view('detailcommande',compact('ressource', 'data'));
    }


    public function deletefile($id) {
    $ressource = Media::findOrFail($id);
    if($path = File::exists("programme/".$ressource->image)) {
        File::delete('programme/'.$ressource->image);
    }

    $ressource->delete();
    return redirect()->back();
    }
}
