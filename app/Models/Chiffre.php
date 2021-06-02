<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chiffre extends Model
{
    use HasFactory;

    protected $table = "chiffres";

    protected $fillable = [
        "nombre",
        "texte",
    ];

    
}
