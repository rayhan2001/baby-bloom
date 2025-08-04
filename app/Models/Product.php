<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'short_description',
        'long_description',
        'price',
        'discount_price',
        'discount_type',
        'stock_status',
        'is_featured',
        'status',
        'details'
    ];

    protected $casts = [
        'details' => 'array',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class);
    }
}
