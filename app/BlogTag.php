<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
