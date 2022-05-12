<?php

namespace App\Services;

use App\Models\Image;

/**
 * Class FileUploadService.
 */
class FileUploadService
{
    public function uploadImages($data, $post_id)
    {
        foreach ($data as $img) {
            $name = $img->getClientOriginalName();
            $destinationPath = 'public/images';
            $img->storeAs($destinationPath, $name);
            $image = new Image();
            $image->name = $name;
            $image->post_id = $post_id;
            $image->save();
        }
    }
}
