<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'code' => "A2020",
                'license_plate' => "D 9090 JK",
                'car_type_id' => 1,
            ],
        ];

        foreach ($cars as $value) {
            Cars::create($value);
        }
    }
}
