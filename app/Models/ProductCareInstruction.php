<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCareInstruction extends Model
{
    protected $fillable = ['product_id', 'instruction_text'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
