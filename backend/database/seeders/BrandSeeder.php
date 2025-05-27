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
            ['brandName' => 'Toyota','logo' => 'brands/toyota.png'],
            ['brandName' => 'Ford','logo' => 'brands/ford.png'],
            ['brandName' => 'Audi','logo' => 'brands/audi.png'],
            ['brandName' => 'Mercedes Benz','logo' => 'brands/mercedes.png'],
            ['brandName' => 'BMW','logo' => 'brands/bmw.png'],
            ['brandName' => 'Honda','logo' => 'brands/honda.png'],
            ['brandName' => 'Volkswagen','logo' => 'brands/volkswagen.png'],
            ['brandName' => 'Chevrolet','logo' => 'brands/chevrolet.png'],
            ['brandName' => 'Nissan','logo' => 'brands/nissan.png'],
            ['brandName' => 'Hyundai','logo' => 'brands/hyundai.png'],
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
