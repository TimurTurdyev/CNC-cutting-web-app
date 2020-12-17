<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags', 'App\Models\Posts', 'tag_id', 'post_id');
    }
}
