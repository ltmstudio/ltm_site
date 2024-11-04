<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function getWebp($path)
    {
        $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);

        // Проверка, существует ли WebP-версия
        if (Storage::disk('public')->exists($webpPath)) {
            return asset('storage/' . $webpPath);
        }

        // Если WebP нет, возвращаем оригинал
        return asset('storage/' . $path);
    }
}
