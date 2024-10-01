<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    // Definieren Sie die Felder, die per Mass Assignment gefüllt werden dürfen
    protected $fillable = [
        'season',
        'round',
        'raceName',
        'circuitName',
        'date',
    ];
}