<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class ConvertImagesToWebp extends Command
{
    protected $signature = 'convert:images-webp';
    protected $description = 'Convert all images in assets to WebP format';

    public function handle()
    {
        $path = public_path('assets');
        $files = File::allFiles($path);

        foreach ($files as $file) {
            $extension = $file->getExtension();

            // Проверяем, что это изображение, которое можно конвертировать
            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $imagePath = $file->getPathname();
                $webpPath = str_replace(".$extension", '.webp', $imagePath);

                // Конвертация изображения в WebP
                Image::make($imagePath)->encode('webp', 90)->save($webpPath);
                $this->info("Converted {$file->getFilename()} to WebP.");
            }
        }

        $this->info('All images converted to WebP format.');
    }
}
