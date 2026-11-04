<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function interior()
    {
        $products = Product::where('category', 'interior')->get();

        return view('products', [
            'title'       => 'Interior',
            'description' => 'Turn your cabin into a private lounge. Light, mood, and detail, all dialed in.',
            'products'    => $products,
        ]);
    }

    public function exterior()
    {
        $products = Product::where('category', 'exterior')->get();

        return view('products', [
            'title'       => 'Exterior',
            'description' => 'Turn heads before the engine even starts. Lighting and details that own every street.',
            'products'    => $products,
        ]);
    }
}