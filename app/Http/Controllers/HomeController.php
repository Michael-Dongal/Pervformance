<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $waNumber = '6285156070332';

        $categories = Category::orderBy('sort_order')->get()
            ->mapWithKeys(fn ($c) => [$c->slug => ['name' => $c->name, 'desc' => $c->description]])
            ->all();

        $products = Product::with(['category', 'variants'])
            ->orderBy('category_id')->orderBy('sort_order')->orderBy('id')->get()
            ->map(fn ($p) => $p->toStorefront())
            ->values()
            ->all();

        return view('home', [
            'config' => [
                'waNumber'   => $waNumber,
                'imgBase'    => asset('images'),
                'categories' => $categories,
                'products'   => $products,
            ],
        ]);
    }
}