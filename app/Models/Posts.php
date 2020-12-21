<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    const POST_ACTIVE = 'PUBLISHED';

    public function published()
    {
        return Posts::where('status', self::POST_ACTIVE)
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select(['posts.*', 'categories.name as category_name', 'categories.slug as category_slug'])
            ->paginate((int)setting('site.pagination'));
    }

    public function postsToCategory($category_id)
    {
        return Posts::where('category_id', $category_id)
            ->leftJoin('users', 'posts.author_id', '=', 'users.id')
            ->select(['posts.*', 'users.name as author_name'])
            ->where('posts.status', '=', self::POST_ACTIVE)
            ->paginate((int)setting('site.pagination'));
    }

    public function autor()
    {
        return User::where('id', $this->author_id)->first(['name', 'id']);
    }
}
