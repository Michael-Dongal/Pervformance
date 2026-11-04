<?php


namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class StorefrontSeeder extends Seeder
{
    public function run(): void
    {
        $interior = Category::updateOrCreate(['slug' => 'interior'], [
            'name'        => 'Interior',
            'description' => 'Turn your cabin into a private lounge. Light, mood, and detail, all dialed in.',
            'sort_order'  => 1,
        ]);

        $exterior = Category::updateOrCreate(['slug' => 'eksterior'], [
            'name'        => 'Exterior',
            'description' => 'Turn heads before the engine even starts. Lighting and details that own every street.',
            'sort_order'  => 2,
        ]);

        $items = [
            [$interior, 1, 'Ambient Light', 'proof', true,  'intproduct_1.png', ['PHOTO / VIDEO'], 'Soft contours of light that wrap your cabin in a calm, premium glow.'],
            [$interior, 2, 'Starlight',     'proof', false, 'intproduct_2.png', ['PHOTO / VIDEO'], 'A ceiling full of stars. Every night drive feels cinematic.'],
            [$interior, 3, 'Footlight',     'proof', false, 'intproduct_3.png', ['PHOTO / VIDEO'], 'A subtle glow at your feet. Small detail, big mood.'],

            [$exterior, 1, 'Engine Bay',    'proof',    false, 'extproduct_1.png', ['PHOTO / VIDEO'], 'Pop the hood and let your engine bay steal the show.'],
            [$exterior, 2, 'Acrylic Plate', 'variants', false, 'extproduct_2.png', null,              'Crystal-clear acrylic plates with a clean, modern finish.'],
            [$exterior, 3, 'Slimframe',     'types',    false, 'extproduct_3.png', null,              'Ultra-thin plate frames for a sleek, minimal look. Pick your style.'],
            [$exterior, 4, 'Underglow',     'proof',    false, 'extproduct_4.png', ['PHOTO / VIDEO'], 'A bold glow from below that gives your ride serious night presence.'],
            [$exterior, 5, 'Mini Projie',   'proof',    false, 'extproduct_5.png', ['PHOTO / VIDEO'], 'Mini projector lenses for sharper, brighter headlights with serious road presence.'],
        ];

        foreach ($items as [$category, $order, $name, $kind, $requestable, $image, $labels, $description]) {
            Product::updateOrCreate(
                ['category_id' => $category->id, 'name' => $name],
                [
                    'kind'        => $kind,
                    'requestable' => $requestable,
                    'image'       => $image,
                    'labels'      => $labels,
                    'description' => $description,
                    'sort_order'  => $order,
                ]
            );
        }

        $acrylic = Product::where('category_id', $exterior->id)->where('name', 'Acrylic Plate')->first();

        foreach ([['Electric Car', 'extproduct_6.png'], ['Black', 'extproduct_7.png'], ['White', 'extproduct_8.png']] as $i => [$name, $image]) {
            ProductVariant::updateOrCreate(
                ['product_id' => $acrylic->id, 'name' => $name],
                ['image' => $image, 'sort_order' => $i + 1]
            );
        }
    }
}