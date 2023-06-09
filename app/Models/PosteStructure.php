<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosteStructure extends Model
{
    use HasFactory;

    protected $fillable= [
        'poste_id',
        'pointage_id',
        'structure_id',
    ];
}
