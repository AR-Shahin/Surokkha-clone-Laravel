<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dhaka = ['Dhaka', 'Gazipur', 'Demra', 'Narayngong'];
        $Chittagong = ['Chandpur', 'Cumilla', 'Ctg 1', 'Ctg 2'];
        $Sylhet = ['Sylhet 1', 'Sylhet 2', 'Sylhet 3', 'Sylhet 4'];
        $Khulna = ['Khulna 1', 'Khulna 2', 'Khulna 3', 'Khulna 4'];
        $Barishal = ['Barishal 1', 'Barishal 2', 'Barishal 3', 'Barishal 4'];

        foreach ($dhaka as $dhk) {
            District::create([
                'division_id' => 1,
                'name' => $dhk,
            ]);
        }

        foreach ($Chittagong as $dhk) {
            District::create([
                'division_id' => 2,
                'name' => $dhk,
            ]);
        }


        foreach ($Sylhet as $dhk) {
            District::create([
                'division_id' => 3,
                'name' => $dhk,
            ]);
        }


        foreach ($Khulna as $dhk) {
            District::create([
                'division_id' => 4,
                'name' => $dhk,
            ]);
        }

        foreach ($Barishal as $dhk) {
            District::create([
                'division_id' => 5,
                'name' => $dhk,
            ]);
        }
    }
}
