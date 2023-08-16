<?php

namespace Database\Seeders;

use App\Models\Pools;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyPoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Pools = [
            [
                'name' => "Arnest Shuttle Jatinangor",
                'address' => "Jalan Jatinangor no 2002",
            ],
            [
                'name' => "Arnest Shuttle Pasteur",
                'address' => "Jalan Pasteur no 2002",
            ],
        ];

        foreach ($Pools as $value) {
            Pools::create($value);
        }
    }
}
