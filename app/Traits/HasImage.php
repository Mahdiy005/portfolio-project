<?php

namespace App\Traits;

class HasImage
{
    public function storeImage($image, $data)
    {
        $newImgName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('testimonials', $newImgName, 'public');
        $data['image'] = $newImgName;
    }
}
