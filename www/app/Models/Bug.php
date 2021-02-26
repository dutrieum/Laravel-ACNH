<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'rarity',
        'catch-phrase',
        'availability-month',
        'availability-time',
        'icon',
        'image'
    ];

}
