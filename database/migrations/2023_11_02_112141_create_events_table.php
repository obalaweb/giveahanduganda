<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('events', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('thumbnail');
			$table->string('category');
			$table->string('venue');
			$table->dateTime('date');
			$table->text('about');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('events');
	}
};
