<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVariant extends Model
{
    protected $fillable = ['product_id', 'sku', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function inventoryLogs(): HasMany
    {
        return $this->hasMany(InventoryLog::class, 'variant_id');
    }
}
