<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Storage;

class ConvertImagesToWebp
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->isSuccessful() && $response->headers->get('Content-Type') === 'text/html') {
            $content = $response->getContent();

            // Регулярное выражение для поиска всех тегов img с JPG или PNG
            $content = preg_replace_callback(
                '/<img\s+[^>]*src=["\']([^"\']+\.(?:jpg|jpeg|png))["\'][^>]*>/i',
                function ($matches) {
                    $originalPath = $matches[1];
                    $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $originalPath);

                    // Проверяем, существует ли WebP-версия
                    if (Storage::disk('public')->exists($webpPath)) {
                        return str_replace($originalPath, asset('storage/' . $webpPath), $matches[0]);
                    }

                    // Возвращаем оригинальный <img>, если WebP не найден
                    return $matches[0];
                },
                $content
            );

            $response->setContent($content);
        }

        return $response;
    }
}
