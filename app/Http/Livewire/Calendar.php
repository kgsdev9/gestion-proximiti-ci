<?php

namespace App\Http\Livewire;

use App\Models\MissionArtisan;
use Livewire\Component;

class Calendar extends Component
{

    public $events = [];
    public function render()
    {      $this->events = json_encode(MissionArtisan::all());
        return view('livewire.calendar')->extends('admin.layouts.app')->section('master');
    }
}
