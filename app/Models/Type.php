<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'slug'
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'type_id', 'id');
    }
}
