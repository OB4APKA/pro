<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'image',
        'description',
        'detailed_description'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(trim($value));
    }


    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = strtolower(trim($value));
    }


    public function getTypeAttribute($value)
    {
        return ucfirst($value);
    }
}
