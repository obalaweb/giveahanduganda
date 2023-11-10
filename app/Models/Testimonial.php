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
		'status',
	];

	protected $casts = [
		'status' => 'boolean',
	];

	public function getThumbnailAttribute($value) {
		return asset('storage/' . $value);
	}

	public function getOriginalThumbnail(): string {
		return $this->thumbnail;
	}

	// public function getThumbnail(): string {
	// 	// Modify the image URL here.
	// 	return 'https://example.com/modified-image.jpg';
	// }
}
