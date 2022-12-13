<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class psikiater extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    public function jawaban_psikiaters()
    {
        return $this->hasMany(jawaban_psikiater::class);
    }

    public function artikels()
    {
        return $this->hasMany(artikel::class);
    }

}
