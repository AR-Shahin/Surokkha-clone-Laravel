<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccines = [
            'Moderna',
            'Pfizer',
            'Sputnik V',
            'Sinopharm'
        ];

        foreach ($vaccines as $vaccine) {
            Vaccine::create([
                'name' => $vaccine,
                'available' => rand(0, 50)
            ]);
        }
    }
}
