<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jawaban_psikiater extends Model
{
    use HasFactory;

    public function pertanyaan()
    {
        return $this->belongsTo(pertanyaan::class);
    }

    public function psikiater()
    {
        return $this->belongsTo(psikiater::class);
    }
}
