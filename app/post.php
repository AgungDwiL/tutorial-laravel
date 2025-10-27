<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
