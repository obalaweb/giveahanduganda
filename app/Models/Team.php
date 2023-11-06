<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {
	use HasFactory;

	protected $with = 'user';

	protected $fillable = [
		'user_id',
		'about',
		'profile',
		'expertise',
		'fb_link',
		'twitter_link',
		'whatsapp_no',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function getProfileAttribute($value) {
		return asset('storage/' . $value);
	}
}
