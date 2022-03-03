<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run() : void
    {
        $product1 = Product::create([
            'name' => 'Producto 1',
            'description' => 'Descripción del Producto 1',
            'price' => 2000
        ]);

        $product2 = Product::create([
            'name' => 'Producto 2',
            'description' => 'Descripción del Producto 2',
            'price' => 7000
        ]);

        $product3 = Product::create([
            'name' => 'Producto 3',
            'description' => 'Descripción del Producto 3',
            'price' => 3500
        ]);

        $product4 = Product::create([
            'name' => 'Producto 4',
            'description' => 'Descripción del Producto 4',
            'price' => 12000
        ]);

        $product5 = Product::create([
            'name' => 'Producto 5',
            'description' => 'Descripción del Producto 5',
            'price' => 5200
        ]);

        $product6 = Product::create([
            'name' => 'Producto 6',
            'description' => 'Descripción del Producto 6',
            'price' => 32800
        ]);

        $product7 = Product::create([
            'name' => 'Producto 7',
            'description' => 'Descripción del Producto 7',
            'price' => 16100
        ]);
    }
}
