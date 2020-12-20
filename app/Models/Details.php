<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Details extends Model
{
    use HasFactory;

    public function category(): HasOne
    {
        return $this->hasOne('App\Models\Services', 'id', 'service_id');
    }

    public function attributes(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\Attributes', 'App\Models\DetailAttribute', 'detail_id', 'id', 'id', 'attribute_id');
    }

    public function questions(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\Questions', 'App\Models\DetailQuestion', 'detail_id', 'id', 'id', 'question_id');
    }

    public function tags(): HasManyThrough
    {
        return $this->hasManyThrough('App\Models\Tags', 'App\Models\DetailTag', 'detail_id', 'id', 'id', 'tag_id');
    }
}
