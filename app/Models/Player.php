<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_foto',
        'over',
        'team',
        'nationality',
        'position',
        'skills',
    ];

    protected $casts = [
        'skills' => 'json', // Define o campo 'skills' como um campo JSON.
    ];
}
