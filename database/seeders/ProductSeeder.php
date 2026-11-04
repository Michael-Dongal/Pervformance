<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name'        => 'Ambient Light',
                'category'    => 'interior',
                'kind'        => 'proof',
                'requestable' => true,
                'description' => 'Soft contours of light that wrap your cabin in a calm, premium glow.',
                'image'       => 'intproduct_1.png',
            ],
            [
                'name'        => 'Starlight',
                'category'    => 'interior',
                'kind'        => 'proof',
                'requestable' => false,
                'description' => 'A ceiling full of stars. Every night drive feels cinematic.',
                'image'       => 'intproduct_2.png',
            ],
            [
                'name'        => 'Footlight',
                'category'    => 'interior',
                'kind'        => 'proof',
                'requestable' => false,
                'description' => 'A subtle glow at your feet. Small detail, big mood.',
                'image'       => 'intproduct_3.png',
            ],

            [
                'name'        => 'Engine Bay',
                'category'    => 'exterior',
                'kind'        => 'proof',
                'requestable' => false,
                'description' => 'Pop the hood and let your engine bay steal the show.',
                'image'       => 'extproduct_1.png',
            ],
            [
                'name'        => 'Acrylic Plate',
                'category'    => 'exterior',
                'kind'        => 'variants',
                'requestable' => false,
                'description' => 'Crystal-clear acrylic plates with a clean, modern finish.',
                'image'       => 'extproduct_2.png',
            ],
            [
                'name'        => 'Slimframe',
                'category'    => 'exterior',
                'kind'        => 'types',
                'requestable' => false,
                'description' => 'Ultra-thin plate frames for a sleek, minimal look. Pick your style.',
                'image'       => 'extproduct_3.png',
            ],
            [
                'name'        => 'Underglow',
                'category'    => 'exterior',
                'kind'        => 'proof',
                'requestable' => false,
                'description' => 'A bold glow from below that gives your ride serious night presence.',
                'image'       => 'extproduct_4.png',
            ],
            [
                'name'        => 'Mini Projie',
                'category'    => 'exterior',
                'kind'        => 'proof',
                'requestable' => false,
                'description' => 'Mini projector lenses for sharper, brighter headlights with serious road presence.',
                'image'       => 'extproduct_5.png',
            ],
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(
                ['name' => $item['name']],
                $item
            );
        }

        $variants = [
            ['name' => 'Electric Car', 'image' => 'extproduct_6.png'],
            ['name' => 'Black',        'image' => 'extproduct_7.png'],
            ['name' => 'White',        'image' => 'extproduct_8.png'],
        ];

        $acrylic = Product::where('name', 'Acrylic Plate')->first();

        foreach ($variants as $variant) {
            ProductVariant::updateOrCreate(
                ['product_id' => $acrylic->id, 'name' => $variant['name']],
                ['image' => $variant['image']]
            );
        }
    }
}