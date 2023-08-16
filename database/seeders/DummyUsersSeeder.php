<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Jamal",
                'phone' => "081000000001",
                'email' => "jamal@gamil.com",
                'password' => "jamall",
                'role' => "customer",
            ],
        ];

        foreach ($users as $value) {
            User::create($value);
        }
    }
}
