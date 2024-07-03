<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example data to seed into the products table
        $products = [
            [
                'name' => 'Product 1',
                'image' => 'images/doctor-sample.jpg',
                'unit_price' => 100.00,
                'description' => 'Description of Product',
                'brand' => 'Brand A',
            ],
            [
                'name' => 'Product 2',
                'image' => 'images/doctor-sample.jpg',
                'unit_price' => 150.00,
                'description' => 'Description of Product',
                'brand' => 'Brand B',
            ],
        ];

        // Loop through each product and create a new record in the products table
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
