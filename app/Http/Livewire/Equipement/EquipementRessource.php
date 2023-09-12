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
        Equipement::create([
            'designation' => $this->designation,
            'quantite' => $this->quantite,
            'fournisseur' => $this->fournisseur,
            'description' => $this->description,
            'price' => $this->price,
            ]);

           $this->resetFields();

        // $this->validate();
        // try {
        //     Equipement::create([
        //         'designation' => $this->designation,
        //         'quantite' => $this->quantite,
        //         'fournisseur' => $this->fournisseur,
        //         ]);
        //     session()->flash('success','Equipment ajouté avec succes!!');
        //     $this->resetFields();
        // } catch (\Exception $ex) {
        //     session()->flash('error','Quelsue chose ne va pas !!');
        // }
    }





    public function editEquipment(string $id) {

        $singleEquipment = Equipement::where('id',$id)->first();
        $this->equipmentID = $id;
        $this->designation = $singleEquipment->designation;
        $this->quantite = $singleEquipment->quantite;
        $this->price = $singleEquipment->price;
        $this->fournisseur = $singleEquipment->fournisseur;
        $this->description = $singleEquipment->description;

        // try  {
        //     $equipmentRessource = Equipement::findOrFail($id);
        //     if(!$equipmentRessource) {
        //         session()->flash('erreur','Aucun equipement trouvé');
        //     } else {
        //         $equipmentRessource->designation = $this->designation;
        //         $equipmentRessource->quantite = $this->quantite;
        //         $equipmentRessource->fournisseur = $this->fournisseur;
        //     }

        // }catch(\Exception $e) {
        //     session()->flash('erreur','Quelque chose ne va pas!!');
        // }
    }


    public function updateEquipment()
    {

        if ($this->equipmentID) {
            $equipment = Equipement::find($this->equipmentID);
            $equipment->update([
                'designation' => $this->designation,
                'quantite' => $this->quantite,
                'fournisseur' => $this->fournisseur,
                'description' => $this->description,
            ]);

            session()->flash('message', 'Users Updated Successfully.');
            $this->resetFields();
        }
    }


    // public function updateEquipment($id)
    // {
    //     $this->equipmentID = Equipement::where('id', $id)->first();
    //     // $this->validate();


    //     try {
    //         Equipement::whereId($this->equipmentID->id)->update([
    //             'designation' => $this->designation,
    //             'quantite' => $this->quantite,
    //             'fournisseur' => $this->fournisseur,
    //             'description' => $this->description,
    //         ]);
    //         session()->flash('success','Equipement modifié avec succes!!');
    //         $this->resetFields();
    //     } catch (\Exception $ex) {
    //         session()->flash('success','quelque chose ne va pas!!');
    //     }
    // }


}

