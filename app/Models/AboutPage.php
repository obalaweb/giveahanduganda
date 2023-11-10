<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model {
	use HasFactory;

	protected $fillable = [
		'common_title',
		'common_description',
		'cta_title',
		'cta_image',
		'cta_video',
		'title',
		'description',
		'achivement',
		'image',
		'action_title',
		'action_image',
		'action_items',
	];

	public function getActionItemsAttribute($value) {
		return json_decode($value, true);
	}
}
