<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function customers()
    {
        return $this->belongsToMany(customer::class);
    }
}
