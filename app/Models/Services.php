<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Services extends Model
{
    use HasFactory;

    public function details(): HasMany
    {
        return $this->hasMany('App\Models\Details', 'service_id')->where(['status' => 1]);
    }

    public function advantages(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\Advantages', 'App\Models\ServiceAdvantage', 'service_id', 'id', 'id', 'advantage_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany('App\Models\Details', 'service_id')
            ->leftJoin('detail_tag', 'detail_id', '=', 'details.id')
            ->join('tags', 'tag_id', '=', 'tags.id')
            ->select(['tags.id', 'tags.name'])
            ->where(['status' => 1])
            ->groupBy('tags.id', 'tags.name');
    }
}
