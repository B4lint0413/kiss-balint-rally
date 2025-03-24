<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('races')->insert([
            ['id' => 1, 'name' => 'Monte Carlo Rally', 'location' => 'Monaco', 'date' => '2025-01-23', 'type' => 'Group A'],
            ['id' => 2, 'name' => 'Sweden Rally', 'location' => 'Svédország', 'date' => '2025-02-13', 'type' => 'Group B'],
            ['id' => 3, 'name' => 'Safari Rally Kenya', 'location' => 'Kenya', 'date' => '2025-03-28', 'type' => 'Group A'],
            ['id' => 4, 'name' => 'Croatia Rally', 'location' => 'Horvátország', 'date' => '2025-04-18', 'type' => 'Group B'],
            ['id' => 5, 'name' => 'Portugal Rally', 'location' => 'Portugália', 'date' => '2025-05-16', 'type' => 'Group A'],
            ['id' => 6, 'name' => 'Italy Sardegna Rally', 'location' => 'Olaszország', 'date' => '2025-06-06', 'type' => 'Group B'],
            ['id' => 7, 'name' => 'Estonia Rally', 'location' => 'Észtország', 'date' => '2025-07-18', 'type' => 'Group A'],
            ['id' => 8, 'name' => 'Finland Rally', 'location' => 'Finnország', 'date' => '2025-08-01', 'type' => 'Group B'],
            ['id' => 9, 'name' => 'Greece Acropolis Rally', 'location' => 'Görögország', 'date' => '2025-09-06', 'type' => 'Group A'],
            ['id' => 10, 'name' => 'Japan Rally', 'location' => 'Japán', 'date' => '2025-11-07', 'type' => 'Group B'],
        ]);
    }
}
