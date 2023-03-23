<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frizer extends Model
{
    use HasFactory;

    protected $table = 'frizeri';

    protected $fillable = [
        'imePrezime',
        'godine_iskustva', 
        'rang',
        'kontakt'
    ];

    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
}
