<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pertanyaans()
    {
        return $this->hasMany(pertanyaan::class);
    }

    public function donations()
    {
        return $this->hasMany(donation::class);
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