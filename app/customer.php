<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function roles()
    {
        return $this->belongsToMany(role::class);
    }
}
