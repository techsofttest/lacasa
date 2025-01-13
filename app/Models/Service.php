<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Service extends Model
{
    protected static function booted()
    {
        static::saving(function ($model) {
            if (!$model->slug) {  // Generate slug only if it's not already set
                $model->slug = Str::slug($model->name);
            }
        });

        /*static::creating(function ($model) {
            if (is_null($model->order)) {
                $model->order = static::max('order') + 1;
            }
        });*/

    }
}
