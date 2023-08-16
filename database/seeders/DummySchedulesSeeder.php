<?php

namespace Database\Seeders;

use App\Models\Schedules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                'car_type_id' => "1",
                'departure_time' => "08.00",
                'duration' => "60",
            ],
        ];

        foreach ($schedules as $value) {
            Schedules::create($value);
        }
    }
}
