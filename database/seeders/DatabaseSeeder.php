<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'usc_code' => 'USC123',
            'country' => 'US',
            'city' => 'Test City',
            'address' => '123 Test St',
            'postal_code' => '12345',
            'password' => Hash::make('password123'),
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
