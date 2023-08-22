<?php

namespace App\Exports;

use App\Models\Artisan;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArtisanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Artisan::all();
    }
}
