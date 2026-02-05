<?php

namespace Database\Seeders;


use App\Models\Product;
use App\Models\Currency;
use App\Models\ProductPrecie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            // Crear algunas monedas
            Currency::create([
                'name' => 'USD',
                'symbol' => '$',
                'exchange_rate' => 1.0
            ]);

            Currency::create([
                'name' => 'EUR',
                'symbol' => '€',
                'exchange_rate' => 0.85
            ]);

            Currency::create([
                'name' => 'MXN',
                'symbol' => '$',
                'exchange_rate' => 18.5
            ]);

            // Crear algunos productos
            Product::create([
                'name' => 'Producto A',
                'description' => 'Descripción del Producto A',
                'price' => 100,
                'currency_id' => 1,
                'tax_cost' => 15,
                'manufacturing_cost' => 60
            ]);

            Product::create([
                'name' => 'Producto B',
                'description' => 'Descripción del Producto B',
                'price' => 200,
                'currency_id' => 2,
                'tax_cost' => 30,
                'manufacturing_cost' => 120
            ]);

            Product::create([
                'name' => 'Producto c',
                'description' => 'Descripción del Producto c',
                'price' => 300,
                'currency_id' => 3,
                'tax_cost' => 40,
                'manufacturing_cost' => 100
            ]);

            // Crear algunos precios históricos de productos
            ProductPrecie::create([
                'product_id' => 1,
                'currency_id' => 1,
                'price' => 90,
                
            ]);

            ProductPrecie::create([
                'product_id' => 2,
                'currency_id' => 2,
                'price' => 180,

            ]);

            ProductPrecie::create([
                'product_id' => 3,
                'currency_id' => 3,
                'price' => 250,

            ]);
    }
}
