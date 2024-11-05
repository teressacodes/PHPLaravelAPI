<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1000',
                'description' => 'Description for product 1000',
                'price' => 49.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 2000',
                'description' => 'Description for product 2000',
                'price' => 44.00,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 3000',
                'description' => 'Description for product 3000',
                'price' => 39.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 4000',
                'description' => 'Description for product 4000',
                'price' => 29.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 5000',
                'description' => 'Description for product 5000',
                'price' => 19.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 6000',
                'description' => 'Description for product 6000',
                'price' => 9.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 7000',
                'description' => 'Description for product 7000',
                'price' => 4.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 8000',
                'description' => 'Description for product 8000',
                'price' => 2.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 9000',
                'description' => 'Description for product 9000',
                'price' => 1.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 10000',
                'description' => 'Description for product 10000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 11000',
                'description' => 'Description for product 11000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 12000',
                'description' => 'Description for product 12000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 13000',
                'description' => 'Description for product 13000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 14000',
                'description' => 'Description for product 14000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 15000',
                'description' => 'Description for product 15000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 16000',
                'description' => 'Description for product 16000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 17000',
                'description' => 'Description for product 17000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 18000',
                'description' => 'Description for product 18000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 19000',
                'description' => 'Description for product 19000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 20000',
                'description' => 'Description for product 20000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 21000',
                'description' => 'Description for product 21000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 22000',
                'description' => 'Description for product 22000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 23000',
                'description' => 'Description for product 23000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 24000',
                'description' => 'Description for product 24000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 25000',
                'description' => 'Description for product 25000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 26000',
                'description' => 'Description for product 26000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 27000',
                'description' => 'Description for product 27000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 28000',
                'description' => 'Description for product 28000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 29000',
                'description' => 'Description for product 29000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 30000',
                'description' => 'Description for product 30000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 31000',
                'description' => 'Description for product 31000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 32000',
                'description' => 'Description for product 32000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 33000',
                'description' => 'Description for product 33000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 34000',
                'description' => 'Description for product 34000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 35000',
                'description' => 'Description for product 35000',
                'price' => 99.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 36000',
                'description' => 'Description for product 36000',
                'price' => 99.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 37000',
                'description' => 'Description for product 37000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 38000',
                'description' => 'Description for product 38000',
                'price' => 79.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 39000',
                'description' => 'Description for product 39000',
                'price' => 45.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 40000',
                'description' => 'Description for product 40000',
                'price' => 99.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 41000',
                'description' => 'Description for product 41000',
                'price' => 45.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 42000',
                'description' => 'Description for product 42000',
                'price' => 77.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 43000',
                'description' => 'Description for product 43000',
                'price' => 23.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 44000',
                'description' => 'Description for product 44000',
                'price' => 55.99,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 45000',
                'description' => 'Description for product 45000',
                'price' => 34.99,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 46000',
                'description' => 'Description for product 46000',
                'price' => 89.99,
                'rating' => 4,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 47000',
                'description' => 'Description for product 47000',
                'price' => 345.55,
                'rating' => 5,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 48000',
                'description' => 'Description for product 48000',
                'price' => 55.00,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'Product 49000',
                'description' => 'Description for product 49000',
                'price' => 99.59,
                'rating' => 3,
                'image' => 'https://picsum.photos/200/300',
            ]
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}