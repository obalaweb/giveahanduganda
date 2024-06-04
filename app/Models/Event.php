<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'thumbnail',
        'venue',
        'date',
        'about',
        'from',
        'to',
    ];

    public function getThumbnailAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
