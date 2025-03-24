<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            ['id' => 1, 'race_id' => 1, 'name' => 'Toyota Gazoo Racing', 'country' => 'Japán'],
            ['id' => 2, 'race_id' => 1, 'name' => 'Hyundai Motorsport', 'country' => 'Dél-Korea'],
            ['id' => 3, 'race_id' => 2, 'name' => 'M-Sport Ford', 'country' => 'Egyesült Királyság'],
            ['id' => 4, 'race_id' => 2, 'name' => 'Toksport WRT', 'country' => 'Németország'],
            ['id' => 5, 'race_id' => 3, 'name' => 'Red Bull Rally Team', 'country' => 'Ausztria'],
            ['id' => 6, 'race_id' => 4, 'name' => 'GR Yaris Team', 'country' => 'Japán'],
            ['id' => 7, 'race_id' => 5, 'name' => 'Skoda Motorsport', 'country' => 'Csehország'],
            ['id' => 8, 'race_id' => 6, 'name' => 'Citroën Racing', 'country' => 'Franciaország'],
            ['id' => 9, 'race_id' => 7, 'name' => 'Subaru Rally Team', 'country' => 'Japán'],
            ['id' => 10, 'race_id' => 8, 'name' => 'Peugeot Sport', 'country' => 'Franciaország'],
            ['id' => 11, 'race_id' => 9, 'name' => 'Volkswagen Motorsport', 'country' => 'Németország'],
            ['id' => 12, 'race_id' => 10, 'name' => 'Lancia Rally Team', 'country' => 'Olaszország'],
            ['id' => 13, 'race_id' => 1, 'name' => 'Mini Rally Team', 'country' => 'Egyesült Királyság'],
            ['id' => 14, 'race_id' => 2, 'name' => 'Opel Rally Team', 'country' => 'Németország'],
            ['id' => 15, 'race_id' => 3, 'name' => 'Honda Rally Team', 'country' => 'Japán'],
        ]);
    }
}
