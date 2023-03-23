<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;

    protected $fillable = [
        'frizer_id',
        'frizura_id',
        'datum', 
        'vreme',
    ];

    public function frizer()
    {
        return $this->belongsTo(Frizer::class);
    }

    public function frizura()
    {
        return $this->belongsTo(Frizura::class);
    }
}
