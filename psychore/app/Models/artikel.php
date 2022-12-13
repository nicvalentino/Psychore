<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['psikiater'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query -> where('title', 'like', '%' . request('search') . '%')
                        -> orWhere('body', 'like', '%' . request('search') . '%');
        });
    }
    

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

    // public static function all()
    // {
    //     return self::$artikel;
    // }

    // public static function find($slug)
    // {
    //     $artikels = artikel::all();
    //     $found = [];
    //     foreach($artikels as $a){
    //         if ($a["slug"] == $slug) {
    //             $found = $a;
    //         }
    //     }

    //     return $found;
    // }
}
