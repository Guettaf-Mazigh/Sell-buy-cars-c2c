<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carModels = [
            // Toyota Models
            ['brand_id' => 1, 'modelName' => 'Camry'],
            ['brand_id' => 1, 'modelName' => 'Corolla'],
            ['brand_id' => 1, 'modelName' => 'Yaris'],
            ['brand_id' => 1, 'modelName' => 'Hilux'],

            // Ford Models
            ['brand_id' => 2, 'modelName' => 'Focus'],
            ['brand_id' => 2, 'modelName' => 'Mustang'],
            ['brand_id' => 2, 'modelName' => 'Puma'],
            ['brand_id' => 2, 'modelName' => 'Fiesta'],

            // Audi Models
            ['brand_id' => 3, 'modelName' => 'Q5'],
            ['brand_id' => 3, 'modelName' => 'A6'],
            ['brand_id' => 3, 'modelName' => 'A4'],
            ['brand_id' => 3, 'modelName' => 'S4'],
            ['brand_id' => 3, 'modelName' => 'Q3'],
            ['brand_id' => 3, 'modelName' => 'A3'],

            // Mercedes Benz Models
            ['brand_id' => 4, 'modelName' => 'A-Class'],
            ['brand_id' => 4, 'modelName' => 'C-Class'],
            ['brand_id' => 4, 'modelName' => 'E-Class'],
            ['brand_id' => 4, 'modelName' => 'S-Class'],

            // BMW Models
            ['brand_id' => 5, 'modelName' => 'Series 1'],
            ['brand_id' => 5, 'modelName' => 'Series 3'],
            ['brand_id' => 5, 'modelName' => 'X1'],
            ['brand_id' => 5, 'modelName' => 'X5'],

            // Honda Models
            ['brand_id' => 6, 'modelName' => 'Civic'],
            ['brand_id' => 6, 'modelName' => 'Accord'],
            ['brand_id' => 6, 'modelName' => 'CR-V'],

            // Volkswagen Models
            ['brand_id' => 7, 'modelName' => 'Golf'],
            ['brand_id' => 7, 'modelName' => 'Polo'],
            ['brand_id' => 7, 'modelName' => 'Passat'],

            // Chevrolet Models
            ['brand_id' => 8, 'modelName' => 'Camaro'],
            ['brand_id' => 8, 'modelName' => 'Malibu'],
            ['brand_id' => 8, 'modelName' => 'Equinox'],

            // Nissan Models
            ['brand_id' => 9, 'modelName' => 'Altima'],
            ['brand_id' => 9, 'modelName' => 'Sentra'],
            ['brand_id' => 9, 'modelName' => 'Juke'],

            // Hyundai Models
            ['brand_id' => 10, 'modelName' => 'i10'],
            ['brand_id' => 10, 'modelName' => 'i20'],
            ['brand_id' => 10, 'modelName' => 'i30'],
            ['brand_id' => 10, 'modelName' => 'i40'],
            ['brand_id' => 10, 'modelName' => 'Tucson'],
            ['brand_id' => 10, 'modelName' => 'Accent'],
            ['brand_id' => 10, 'modelName' => 'Accent RB'],
            ['brand_id' => 10, 'modelName' => 'Atos'],
            ['brand_id' => 10, 'modelName' => 'Eon'],

            // Peugeot Models
            ['brand_id' => 11, 'modelName' => '106'],
            ['brand_id' => 11, 'modelName' => '206'],
            ['brand_id' => 11, 'modelName' => '207'],
            ['brand_id' => 11, 'modelName' => '208'],
            ['brand_id' => 11, 'modelName' => '307'],
            ['brand_id' => 11, 'modelName' => '308'],
            ['brand_id' => 11, 'modelName' => '2008'],
            ['brand_id' => 11, 'modelName' => '3008'],
            ['brand_id' => 11, 'modelName' => '5008'],

            // Citroën Models
            ['brand_id' => 12, 'modelName' => 'C1'],
            ['brand_id' => 12, 'modelName' => 'C3'],
            ['brand_id' => 12, 'modelName' => 'C4'],
            ['brand_id' => 12, 'modelName' => 'C5'],
            ['brand_id' => 12, 'modelName' => 'Berlingo'],

            // Renault Models
            ['brand_id' => 13, 'modelName' => 'Clio'],
            ['brand_id' => 13, 'modelName' => 'Megane'],
            ['brand_id' => 13, 'modelName' => 'Symbol'],
            ['brand_id' => 13, 'modelName' => 'Talisman'],

            // Dacia Models
            ['brand_id' => 14, 'modelName' => 'Logan'],
            ['brand_id' => 14, 'modelName' => 'Sandero'],
            ['brand_id' => 14, 'modelName' => 'Duster'],

            // Opel Models
            ['brand_id' => 15, 'modelName' => 'Corsa'],
            ['brand_id' => 15, 'modelName' => 'Astra'],
            ['brand_id' => 15, 'modelName' => 'Insignia'],
        ];

        foreach ($carModels as $carModel) {
            CarModel::create($carModel);
        }
    }
}
