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
        return view('blog.category', compact('categories'));
    }

    public function post()
    {

    }
}
