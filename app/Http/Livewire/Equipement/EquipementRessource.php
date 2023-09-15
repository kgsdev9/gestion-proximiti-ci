<?php

namespace App\Http\Livewire\Equipement;

use App\Models\Equipement;
use Livewire\Component;

class EquipementRessource extends Component
{

    public $designation ;
    public $quantite ;
    public $fournisseur;
    public $description;
    public $equipmentID ;
    public $price;
    public $search;

    public function render()
    {
        return view('livewire.equipement.equipement-ressource',  [
            'allEquipments' => Equipement::where('designation', 'like', '%'.$this->search.'%')->paginate(10),

        ])
        ->extends('admin.layouts.app')
        ->section('master');
    }


    protected $rules = [
        'designation' => 'required',
        'quantite' => 'required',
        'fournisseur' => 'required',
        'description' => 'required',
        'price'=> 'required'
    ];



    public function resetFields(){
        $this->designation = '';
        $this->quantite = '';
        $this->fournisseur = '';
        $this->description = '';
        $this->price = '';
    }

    public function addEquipment()
    {
        $this->validate();
        Equipement::create([
            'designation' => $this->designation,
            'quantite' => $this->quantite,
            'fournisseur' => $this->fournisseur,
            'description' => $this->description,
            'price' => $this->price,
            ]);
        session()->flash('message', 'Equipement ajouté avec succes.');
        $this->resetFields();


    }


    public function editEquipment(string $id) {

        $singleEquipment = Equipement::where('id',$id)->first();
        $this->equipmentID = $id;
        $this->designation = $singleEquipment->designation;
        $this->quantite = $singleEquipment->quantite;
        $this->price = $singleEquipment->price;
        $this->fournisseur = $singleEquipment->fournisseur;
        $this->description = $singleEquipment->description;

    }


    public function updateEquipment()
    {

        $this->validate();

        if ($this->equipmentID) {
            $equipment = Equipement::find($this->equipmentID);
            $equipment->update([
                'designation' => $this->designation,
                'quantite' => $this->quantite,
                'fournisseur' => $this->fournisseur,
                'description' => $this->description,
            ]);

            session()->flash('message', 'Equipement modifié avec succes.');
            $this->resetFields();
        }
    }

    public function delete(string $id) {
        $ressource = Equipement::find($id);
        $ressource->delete();
        session()->flash('message', 'equipement supprimé avec succec');

    }


}

