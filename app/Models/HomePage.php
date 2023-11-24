<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model {
	use HasFactory;

	protected $fillable = [
		'what_we_do_title',
		'what_we_do_description',
		'items',
		'about_us_title',
		'about_us_description',
		'about_us_image',
		'become_a_volunteer_title',
		'become_a_volunteer_images',
		'milestone',
	];

	protected $casts = [
		'become_a_volunteer_images' => 'array',
		'milestone' => 'array',
	];

	public function getItemsAttribute($value) {
		return json_decode($value, true);
	}

	public function getBecomeAVolunteerImagesAttribute($value) {
		return json_decode($value, true);
	}
}
