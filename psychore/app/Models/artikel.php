<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function psikiater()
    {
        return $this->belongsTo(psikiater::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function likes()
    {
        return $this->hasMany(like::class);
    }
}
