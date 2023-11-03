<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {
	use HasFactory;

	protected $fillable = [
		'title',
		'thumbnail',
		'total',
		'raised',
		'about',
		'slug',
		'donate_link',
	];
}
