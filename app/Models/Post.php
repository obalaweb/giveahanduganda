<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model {
	use HasFactory;

	protected $fillable = [
		'title',
		'slug',
		'tags',
		'body',
		'user_id',
		'category_id',
	];

	protected $casts = [
		'tags' => 'array',
	];

	public function author(): BelongsTo {
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function category(): BelongsTo {
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
}
