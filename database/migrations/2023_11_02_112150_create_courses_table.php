<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('courses', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('thumbnail');
			$table->string('slug');
			$table->string('total');
			$table->string('raised');
			$table->text('about');
			$table->string('donate_link');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('courses');
	}
};
