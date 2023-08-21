<?php

namespace App\Http\Livewire\Caise;

use App\Models\Caisse\Entree;
use App\Models\Commande;
use Livewire\Component;
use Livewire\WithPagination;


class GestionEntre extends Component
{
    public $designation , $montant, $description , $search ;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'designation' => 'required',
        'montant' => 'required',
        'description' => 'required'
    ];

    public function resetFields(){
        $this->designation = '';
        $this->montant = '';
        $this->description = '';
    }


    public function storePost()
    {
        $this->validate();
        try {
            Entree::create([
                'designation' => $this->designation,
                'montant' => $this->montant,
                'description' => $this->description
            ]);
            session()->flash('success','Création effectue avec succes');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('erreur','impossible de proceder à la création !!');
        }
    }


    public function edit($id){
        try {
            $post = Entree::findOrFail($id);
            if( !$post) {
                session()->flash('erreur','Introuvable');
            } else {
                $this->designation = $post->designation;
               $this->montant = $post->montant;

            }
        } catch (\Exception $ex) {
            session()->flash('error','Introuvable!!');
        }

    }


    public function render()
    {
        return view('livewire.caise.gestion-entre', [
            'ressourceEntree' => Entree::where('designation', 'LIKE', '%'.$this->search.'%')
                                        ->orWhere('montant', 'LIKE', '%'.$this->search.'%')
                                        ->orWhere('description', 'LIKE', '%'.$this->search.'%')
                                        ->orderByDesc('created_at')
                                        ->paginate(6)
        ])->extends('admin.layouts.app')->section('master');
    }
}
