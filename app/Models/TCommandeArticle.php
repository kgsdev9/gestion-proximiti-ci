<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCommandeArticle extends Model
{
    use HasFactory;

     protected $guarded = [];

    // protected $fillable  = ['designation', 'prix', 'quantite', 'total', 'commande_id'];


    public function sommeCommande($items) {

        $erroers = [] ;
        if($items) {
            $resultat = collect($items)->sum('total');
        } else{
            $erroers[] = "la valuer n'existepas";
        }

        return $resultat ;
    }


    // public function generate() {
    //     $data = Commande::all();

    //     $pdf = Pdf::loadView('impression.rapportCommande', [
    //         'data'  => $data
    //     ]);
    //     $to_email = [
    //         'kgsdev8@gmail.com',
    //         'kahouoguystephane@gmail.com'
    //     ]  ;
    //     Mail::to($to_email)->send(new SendPDFMail($pdf));
    //     Alert::success('Success', 'Rapport Génerer avec suces consulter votre E-Mail');
    //   return redirect()->back();
    //   }

}
