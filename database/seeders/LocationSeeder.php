<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
    use App\Models\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create(['name' => 'Frente a Barra']);
        Location::create(['name' => 'Frente a Cocina']);
        Location::create(['name' => 'Frente a Peceras']);
        Location::create(['name' => 'Frente a Escenario']);
        Location::create(['name' => 'Junto a Ventanas de Jardin']);
        Location::create(['name' => 'En la Parte de Abajo']);
    }
}
