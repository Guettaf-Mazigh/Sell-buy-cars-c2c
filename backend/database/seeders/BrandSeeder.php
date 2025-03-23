<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['brandName' => 'Toyota'],
            ['brandName' => 'Ford'],
            ['brandName' => 'Audi'],
            ['brandName' => 'Mercedes Benz'],
            ['brandName' => 'BMW'],
            ['brandName' => 'Honda'],
            ['brandName' => 'Volkswagen'],
            ['brandName' => 'Chevrolet'],
            ['brandName' => 'Nissan'],
            ['brandName' => 'Hyundai'],
            ['brandName' => 'Peugeot'],
            ['brandName' => 'Citroën'],
            ['brandName' => 'Renault'],
            ['brandName' => 'Dacia'],
            ['brandName' => 'Opel'],
        ];

        foreach($brands as $brand){
            Brand::create($brand);
        }
    }
}
