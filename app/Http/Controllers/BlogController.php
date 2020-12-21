<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Pages;
use App\Models\Posts;

class BlogController extends Controller
{
    public function index()
    {
        $page = Pages::where('slug', 'blog')->firstOrFail();
        $categories = new Categories();
        $posts = (new Posts)->published();

        return view('blog.index', compact('page', 'categories', 'posts'));
    }

    public function category(Categories $categories)
    {
        $posts = (new Posts)->postsToCategory($categories->id);
        return view('blog.category', compact('categories', 'posts'));
    }

    public function post(Categories $categories, Posts $posts)
    {
        return view('blog.post', compact('categories', 'posts'));
    }
}
