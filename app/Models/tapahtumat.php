<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tapahtumat extends Model
{
    use HasFactory;
    protected $table = 'tapahtumat';
    protected $fillable = [
        'tapahtuma',
        'pisteet'
    ];
}
