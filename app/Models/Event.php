<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function getImageAttribute()
    {
        $value = $this->attributes['thumbnail'];
        return asset('storage/' . $value);
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('F d, Y');
    }

    public function getStartAttribute($value)
    {
        $value = $this->attributes['from'];

        return Carbon::parse($value)->format('h:m A');
    }

    public function getStopAttribute($value)
    {
        $value = $this->attributes['to'];

        return Carbon::parse($value)->format('h:m A');
    }
}
