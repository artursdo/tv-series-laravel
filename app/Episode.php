<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
