<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'kind', 'requestable', 'description', 'image', 'labels', 'sort_order',
    ];

    protected $casts = [
        'requestable' => 'boolean',
        'labels'      => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class)->orderBy('sort_order')->orderBy('id');
    }


    public function toStorefront(): array
    {
        $data = [
            'c'     => $this->category->slug,
            'name'  => $this->name,
            'kind'  => $this->kind,
            'image' => $this->image,
            'desc'  => $this->description,
        ];

        if ($this->requestable) {
            $data['req'] = true;
        }
        $labels = $this->labels;
        if (!empty($labels)) {
            $data['labels'] = $labels;
        }
        if ($this->kind === 'variants') {
            $data['variants'] = $this->variants
                ->map(fn ($v) => ['name' => $v->name, 'image' => $v->image])
                ->all();
        }

        return $data;
    }
}