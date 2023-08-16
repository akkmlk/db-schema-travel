<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [
            [
                'schedule_id' => "1",
                'start_pool_id' => "1",
                'end_pool_id' => "2",
            ],
        ];

        foreach ($routes as $value) {
            Route::create($value);
        }
    }
}
