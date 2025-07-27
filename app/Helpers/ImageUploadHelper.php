<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageUploadHelper
{
    public static function store(UploadedFile $newImage, string $directory = 'profiles', ?string $oldImage = null): string
    {
        Storage::disk('public')->makeDirectory($directory);

        if ($oldImage && Storage::disk('public')->exists($oldImage)) {
            Storage::disk('public')->delete($oldImage);
        }

        $filename = time() . '_' . Str::random(10) . '.' . $newImage->getClientOriginalExtension();

        $newImage->storeAs($directory, $filename, 'public');
        return "{$directory}/{$filename}";
    }
}
