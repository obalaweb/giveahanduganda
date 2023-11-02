<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('slug');
			$table->string('tags');
			$table->foreignIdFor(User::class)->constrained('users');
			$table->text('body');
			$table->foreignIdFor(Category::class)->constrained('categories');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('posts');
	}
};
