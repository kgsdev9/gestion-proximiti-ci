<?php

namespace Database\Seeders;

use App\Models\MissionArtisan;
use Illuminate\Database\Seeder;

class MissionArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MissionArtisan::insert([
            [
                'designation' => 'Evenement 1',
                'date_debut' => '2021-04-02',
                'date_fin' => '2022-04-02',
                'description' => 'Mon artisan de controle',
                'artisan_id' => 1,
            ],
            [
                'designation' => 'Evenement 2',
                'date_debut' => '2021-04-10T08:00:00',
                'date_fin' => '2021-04-10T16:00:00',
                'description' => 'Mon artisan de controle',
                'artisan_id' => 1,
            ],
            [
                'designation' => 'Evenement 3',
                'date_debut' => '2021-04-20',
                'date_fin' => '2021-04-22',
                'description' => 'Mon artisan de controle',
                'artisan_id' => 1,
            ],
        ]);
    }
}
