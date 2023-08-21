<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateCommande extends Component
{
    public function render()
    {
        return view('livewire.update-commande')->extends('admin.layouts.app')->section('master');;
    }
}
