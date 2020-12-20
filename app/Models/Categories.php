<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;

    const POST_ACTIVE = 'PUBLISHED';

    protected $table = 'categories';

    public function posts(): HasMany
    {
        return $this->hasMany('App\Models\Posts', 'category_id')
            ->leftJoin('users', 'posts.author_id', '=', 'users.id')
            ->select(['posts.*', 'users.name as author_name'])
            ->where('posts.status', '=', self::POST_ACTIVE);
    }

    public function tagsList($category_id = 0)
    {
        if ($category_id === 0) {
            return Tags::join('post_tag', 'tags.id', '=', 'post_tag.tag_id')
                ->whereIn('post_tag.post_id', function ($query) {
                    $query->select('posts.id')->from('posts')
                        ->where('posts.status', '=', self::POST_ACTIVE);
                })->get();
        }
        return Tags::join('post_tag', 'tags.id', '=', 'post_tag.tag_id')
            ->whereIn('post_tag.post_id', function ($query) use ($category_id) {
                $query->select('posts.id')->from('posts')
                    ->where('posts.category_id', '=', $category_id)
                    ->where('posts.status', '=', self::POST_ACTIVE);
            })->get();
    }

    public function categoriesList()
    {
        return Categories::join('posts', 'categories.id', '=', 'posts.category_id')
            ->groupBy(['categories.id', 'categories.name'])
            ->orderBy('categories.order')
            ->get([DB::raw('COUNT(posts.id) as total'), 'categories.id', 'categories.name']);
    }
}
