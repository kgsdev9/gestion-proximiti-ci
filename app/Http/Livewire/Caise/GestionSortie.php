<?php

namespace App\Http\Livewire\Caise;

use Livewire\Component;

class GestionSortie extends Component
{
    public function render()
    {
        return view('livewire.caise.gestion-sortie')->extends('admin.layouts.app')->section('master');
    }
}
