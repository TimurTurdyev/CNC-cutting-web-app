<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $page = Pages::where('slug', 'contact')->firstOrFail();
        return view('contact.index', compact('page'));
    }
}
