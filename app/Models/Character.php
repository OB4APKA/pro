<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'type',
        'image',
        'description',
        'detailed_description'
    ];
}
