<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];

    public function getImageAttribute($image): string
    {
        if ($image && file_exists(storage_path('app/public/' . $image))) {
            return asset('storage/' . $image);
        }

        return asset('adminAssets/assets/images/avatars/blank.png');
    }
}
