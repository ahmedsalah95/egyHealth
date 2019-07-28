<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    protected $fillable = ['sponsor_id'];

    public function sponsor()
    {
        return $this->hasOne(Sponsor::class);
    }
}
