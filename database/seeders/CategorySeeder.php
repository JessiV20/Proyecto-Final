<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Bebidas']);
        Category::create(['name' => 'Coctelería']);   
        Category::create(['name' => 'Postres']);  
        Category::create(['name' => 'Para niños']);  
        Category::create(['name' => 'Sopas y Caldos']);  
        Category::create(['name' => 'Entremeses']);  
        Category::create(['name' => 'Pulpo al gusto']);  
        Category::create(['name' => 'Cocteles']);  
        Category::create(['name' => 'Pescado Frito']);  
        Category::create(['name' => 'Especialidades']);  
        Category::create(['name' => 'Filetes']);  
        Category::create(['name' => 'Brochetas']);  
        Category::create(['name' => 'Carnes y Cortes']);  
        Category::create(['name' => 'Snacks']);  
        Category::create(['name' => 'Parrillada']); 
        Category::create(['name' => 'Ensaladas']);   

    }
}
