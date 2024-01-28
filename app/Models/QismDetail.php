<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QismDetail extends Model
{
    use HasFactory;

    public function qism()
    {
        return $this->belongsTo(Qism::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
