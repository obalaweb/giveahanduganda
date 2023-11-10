<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('home_pages', function (Blueprint $table) {
			$table->id();
			$table->string('what_we_do_title');
			$table->text('what_we_do_description');
			$table->json('items');

			$table->string('about_us_title');
			$table->text('about_us_description');
			$table->string('about_us_image')->nullable();
			$table->string('become_a_volunteer_title');
			$table->string('become_a_volunteer_images');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('home_pages');
	}
};
