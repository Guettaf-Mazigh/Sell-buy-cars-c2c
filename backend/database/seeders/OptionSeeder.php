<?php

namespace Database\Seeders;

use App\Models\VehicleOption;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            'Air Conditioning',
            'Power Windows',
            'Power Door Locks',
            'Keyless Entry',
            'Bluetooth Connectivity',
            'USB Ports',
            'Rearview Camera',
            'Tire Pressure Monitoring System (TPMS)',
            'Anti-Lock Braking System (ABS)',
            'Airbags (Front, Side, Curtain)',
            'Electronic Stability Control (ESC)',
            'Automatic Headlights',
            'Cruise Control',
            'Spare Tire or Tire Repair Kit',
        ];

        foreach ($options as $optionName) {
            VehicleOption::firstOrCreate(['Name' => $optionName]);
        }
    }
}
