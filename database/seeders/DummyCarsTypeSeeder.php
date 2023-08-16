<?php

namespace Database\Seeders;

use App\Models\CarsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyCarsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carsType = [
            [
                'type' => "travel",
                'height' => "2",
                'seat_id' => 1,
                'merk' => "toyota",
            ]
        ];

        foreach ($carsType as $value) {
            CarsType::create($value);
        }
    }
}
