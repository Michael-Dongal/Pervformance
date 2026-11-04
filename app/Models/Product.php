<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'kind',
        'requestable',
        'description',
        'image',
    ];

    // One product can have many variants (styles)
    public function variants()
    {
        return $this->hasaMany(ProductVariant::class);
    }
}