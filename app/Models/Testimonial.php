<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {
	use HasFactory;

	protected $fillable = [
		'name',
		'thumbnail',
		'profession',
		'rate',
		'content',
	];

	public function getThumbnailAttribute($value) {
		return asset('storage/' . $value);
	}
}
