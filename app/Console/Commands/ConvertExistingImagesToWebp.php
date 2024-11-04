<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\Images_Add;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ConvertExistingImagesToWebp extends Command
{
    protected $signature = 'convert:existing-images-webp';
    protected $description = 'Convert all existing portfolio images to WebP format';

    public function handle()
    {
        // Конвертация главных изображений из модели Portfolio
        $portfolios = Portfolio::all();
        foreach ($portfolios as $portfolio) {
            $originalPath = $portfolio->photo;
            $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $originalPath);

            if (Storage::disk('public')->exists($originalPath)) {
                $image = Image::make(Storage::disk('public')->path($originalPath))->encode('webp', 90);
                Storage::disk('public')->put($webpPath, $image);
                $this->info("Converted main image for portfolio ID {$portfolio->id} to WebP.");
            }
        }

        // Конвертация дополнительных изображений из модели Images_Add
        $images = Images_Add::all();
        foreach ($images as $img) {
            $originalPath = $img->image_portf;
            $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $originalPath);

            if (Storage::disk('public')->exists($originalPath)) {
                $image = Image::make(Storage::disk('public')->path($originalPath))->encode('webp', 90);
                Storage::disk('public')->put($webpPath, $image);
                $this->info("Converted additional image ID {$img->id} to WebP.");
            }
        }

        $this->info('All existing images have been converted to WebP format.');
    }
}
