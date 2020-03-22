<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageType()
    {
        return $this->hasOne(ImageType::class);
    }
}
