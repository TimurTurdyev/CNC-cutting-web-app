<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $page = Pages::where('slug', 'home')->firstOrFail();
        return view('home', compact('page'));
    }
}
