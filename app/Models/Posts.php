<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    const POST_ACTIVE = 'PUBLISHED';

    public function published($pagination = 0)
    {
        if ($pagination === 0) {
            $pagination = (int)setting('site.pagination');
        }
        return Posts::where('status', self::POST_ACTIVE)
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select(['posts.*', 'categories.name as category_name', 'categories.slug as category_slug'])
            ->paginate($pagination);
    }

    public function user()
    {
        $this->belongsTo('App\Models\User', 'author_id');
    }
}
