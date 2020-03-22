<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    public function genreType()
    {
        return $this->hasOne(GenreType::class);
    }

}
