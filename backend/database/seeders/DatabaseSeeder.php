<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CarModelSeeder::class,
            UserSeeder::class,
            OptionSeeder::class,
            AdminSeeder::class
        ]);
        User::factory(50)->create();
        Car::factory(60)->create();
    }
}
