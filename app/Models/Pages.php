<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Pages extends Model
{
    use HasFactory;

    public function banners($name = ''): HasManyThrough
    {
        if ($name) {
            return $this->hasManyThrough('App\Models\Banners', 'App\Models\PageBanner', 'page_id', 'id', 'id', 'banner_id')
                ->where('name', $name);
        }
        return $this->hasManyThrough('App\Models\Banners', 'App\Models\PageBanner', 'page_id', 'id', 'id', 'banner_id');
    }

    public function service() {
        return Pages::where('slug', 'services')->first();
    }

    public function services() {
        return Services::all();
    }

    public function detailsLatest($limit = 5) {
        return Details::where('status', 1)->orderBy('created_at', 'desc')->limit($limit)->get();
    }
}
