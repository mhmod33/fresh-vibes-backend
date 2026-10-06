<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Fresh vegetables
            ['name' => 'Potatoes', 'description' => 'Fresh farm potatoes', 'price' => 2.50, 'stock' => 500, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Tomatoes', 'description' => 'Ripe red tomatoes', 'price' => 3.00, 'stock' => 300, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Cherry Tomatoes', 'description' => 'Sweet cherry tomatoes', 'price' => 4.50, 'stock' => 200, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'White Onions', 'description' => 'Fresh white onions', 'price' => 2.00, 'stock' => 400, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Red Onions', 'description' => 'Fresh red onions', 'price' => 2.20, 'stock' => 350, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Roumi Eggplant', 'description' => 'Premium roumi eggplant', 'price' => 3.50, 'stock' => 150, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Arousa Eggplant', 'description' => 'Fresh arousa eggplant', 'price' => 3.80, 'stock' => 120, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Green Chili', 'description' => 'Spicy green chili peppers', 'price' => 5.00, 'stock' => 100, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Red Chili', 'description' => 'Hot red chili peppers', 'price' => 5.50, 'stock' => 100, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Colored Peppers', 'description' => 'Mixed bell peppers', 'price' => 6.00, 'stock' => 180, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Cucumbers', 'description' => 'Fresh crisp cucumbers', 'price' => 2.80, 'stock' => 250, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Carrots', 'description' => 'Sweet orange carrots', 'price' => 2.50, 'stock' => 300, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Zucchini', 'description' => 'Fresh green zucchini', 'price' => 3.20, 'stock' => 150, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Kabocha Squash', 'description' => 'Sweet kabocha squash', 'price' => 4.00, 'stock' => 100, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'White Cabbage', 'description' => 'Fresh white cabbage', 'price' => 2.00, 'stock' => 200, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Red Cabbage', 'description' => 'Fresh red cabbage', 'price' => 2.50, 'stock' => 150, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Mushrooms', 'description' => 'Fresh white mushrooms', 'price' => 7.00, 'stock' => 80, 'category' => 'fresh', 'is_active' => true],
            ['name' => 'Leeks', 'description' => 'Fresh green leeks', 'price' => 3.50, 'stock' => 120, 'category' => 'fresh', 'is_active' => true],

            // Aromatic herbs
            ['name' => 'Arugula', 'description' => 'Fresh arugula leaves', 'price' => 4.00, 'stock' => 100, 'category' => 'aromatic', 'is_active' => true],
            ['name' => 'Parsley', 'description' => 'Fresh green parsley', 'price' => 2.50, 'stock' => 150, 'category' => 'aromatic', 'is_active' => true],
            ['name' => 'Coriander', 'description' => 'Fresh coriander leaves', 'price' => 2.80, 'stock' => 130, 'category' => 'aromatic', 'is_active' => true],
            ['name' => 'Dill', 'description' => 'Fresh dill herb', 'price' => 3.00, 'stock' => 100, 'category' => 'aromatic', 'is_active' => true],
            ['name' => 'Thyme', 'description' => 'Fresh thyme sprigs', 'price' => 4.50, 'stock' => 80, 'category' => 'aromatic', 'is_active' => true],
            ['name' => 'Rosemary', 'description' => 'Fresh rosemary herb', 'price' => 5.00, 'stock' => 70, 'category' => 'aromatic', 'is_active' => true],

            // Premium items
            ['name' => 'Avocados', 'description' => 'Premium fresh avocados', 'price' => 8.00, 'stock' => 150, 'category' => 'fresh', 'is_active' => true],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
