<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['variant_id', 'change_type', 'quantity_changed', 'note'];

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
