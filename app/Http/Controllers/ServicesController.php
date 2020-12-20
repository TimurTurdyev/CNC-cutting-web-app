<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\Pages;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $page = Pages::where('slug', 'services')->firstOrFail();
        $services = Services::all();
        $setting = setting('site');
        $setting = setting('site');
        return view('services.index', compact('page', 'services'));
    }

    public function category(Services $services)
    {
        return view('services.category', compact('services'));
    }

    public function detail(Services $services, Details $details)
    {
        return view('services.detail', compact('services', 'details'));
    }
}
