<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {
	use HasFactory;

	protected $fillable = ["url"];

	public function getUrlAttribute($value) {
		return asset('storage/' . $value);
	}
}
