<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class News extends Model
{
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {  // Generate slug only if it's not already set
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
