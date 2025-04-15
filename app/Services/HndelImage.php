<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;


class HndelImage
{

    /**
     * Handle image upload and return the image name.
     */
    public static function store($image)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $image->extension();
        $image->storeAs('public/images', $imageName);
        return $imageName;
    }

    /**
     * Handle image update: upload new image and delete old one.
     */
    public  static function update($image, $currentImage)
    {
        $imageName = date('Y-m-d') . '_' . uniqid() . '.' . $image->extension();
        $image->storeAs('public/images', $imageName);

        if ($currentImage && Storage::exists('public/images/' . $currentImage)) {
            Storage::delete('public/images/' . $currentImage);
        }
    }

        /**
     * Handle delete old one.
     */

    public  static function delete($currentImage)
    {
        if ($currentImage && Storage::exists('public/images/' . $currentImage)) {
            Storage::delete('public/images/' . $currentImage);
        }
    }
}
