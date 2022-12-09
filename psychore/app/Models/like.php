<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;

    public function artikel()
    {
        return $this->belongsTo(artikel::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
