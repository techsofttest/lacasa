<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    //
    protected $fillable = ['name', 'image','achieve_type_id','order'];


    protected static function booted()
    {
        static::creating(function ($achievement) {
            if (is_null($achievement->order)) {
                $achievement->order = static::max('order') + 1;
            }
        });
    }


    public function achieveType()
    {
        return $this->belongsTo(AchieveType::class);
    }
}
