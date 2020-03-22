<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
