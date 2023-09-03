<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

  DB::table('missions')->insert(

    [
        'libelle' => 'Mission Artisan 1',
        'artisan_id' => 1,
        'date_debut' => now()->setTime(7, 0),
        'date_fin' =>now()->setTime(8, 0),
        'description' => 'Mon artisan de controle',

    ],


    [
        'libelle' => 'Mission Artisan 2',
        'artisan_id' => 1,
        'date_debut' => now()->setTime(9, 0),
        'date_fin' =>now()->setTime(10, 0),
        'description' => 'Mon artisan de controle',
    ],


    [
        'libelle' => 'Mission Artisan 3',
        'artisan_id' => 1,
        'date_debut' => now()->setTime(13, 0),
        'date_fin' =>now()->setTime(15, 0),
        'description' => 'Mon artisan de controle',
        'description' => 'Mon artisan de controle',
    ]

);
    }
}
