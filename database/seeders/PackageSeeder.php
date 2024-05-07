<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create(['name' => 'Paquete 1',
                        'description'=> 'Caldo de Pescado o Camarón, Coctel Chico y Refresco',
                        'image' => 'paquete1.png'
                        ]);
                        Package::create(['name' => 'Paquete 2',
                        'description'=> 'Caldo de Pescado o Camarón, Filete de Pescado y Cerveza',
                        'image' => 'paquete2.png'
                        ]);
                        Package::create(['name' => 'Paquete 3',
                        'description'=> 'Coctel de Camarón Chico, 2 Tostadas de Ceviche y Chile Relleno de Mariscos',
                        'image' => 'paquete3.png'
                        ]);
                        Package::create(['name' => 'Paquete 4',
                        'description'=> 'Coctel de Camarón, Caldo de Pescado y Postre ',
                        'image' => 'paquete4.png'
                        ]);
                        Package::create(['name' => 'Paquete 5',
                        'description'=> 'Sopa de Mariscos, Mojarra Frita y Refresco',
                        'image' => 'paquete5.png'
                        ]);
                        Package::create(['name' => 'Promoción 1',
                        'description'=> 'Parrillada para 4 Personas + 1 Tritón',
                        'image' => 'promocion1.png'
                        ]);
                        Package::create(['name' => 'Promocion 2',
                        'description'=> 'Filete Empanizado o Mojarra Frita + Ceviche + 10 Cerveza',
                        'image' => 'promocion2.png'
                        ]);
                        Package::create(['name' => 'Promocion 3',
                        'description'=> '1 Kilo de Ceviche de Pescado + 10 Cervezas',
                        'image' => 'promocion3.png'
                        ]);
                        Package::create(['name' => 'Promocion 4',
                        'description'=> '1 Yarda Preparada + Botana de Ceviche + 10 Ceviche',
                        'image' => 'promocion4.png'
                        ]);
                        Package::create(['name' => 'Promocion 5',
                        'description'=> 'Filete Empanizado o Majarra Frita + Agua Fresca',
                        'image' => 'promocion5.png'
                        ]);
                        Package::create(['name' => 'Promocion 6',
                        'description'=> 'Tritón Corona',
                        'image' => 'Promocion6.png'
                        ]);
                        Package::create(['name' => 'Promocion 7',
                        'description'=> 'Tritón Indio',
                        'image' => 'promocion7.png'
                        ]);
                        
    }
}
