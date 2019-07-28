<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function place()
    {
        return $this->hasOne(Place::class);
    }
}
