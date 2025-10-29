<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tag extends Model
{
    public function posts()
    {
        return $this->BelongsToMany(Post::class);
    }
}
