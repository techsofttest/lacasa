<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //

    protected $fillable = ['order'];

    protected static function booted()
    {
        static::creating(function ($location) {
            if (is_null($location->order)) {
                $location->order = static::max('order') + 1;
            }
        });
    }

}
