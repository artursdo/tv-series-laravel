<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreType extends Model
{
    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

}
