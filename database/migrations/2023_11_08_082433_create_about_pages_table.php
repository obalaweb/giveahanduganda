<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('about_pages', function (Blueprint $table) {
			$table->id();
			$table->string('common_title');
			$table->text('common_description');

			$table->string('cta_title');
			$table->string('cta_image');
			$table->string('cta_video');

			$table->string('title');
			$table->text('description');
			$table->string('achivement');
			$table->string('image');

			$table->string('action_title');
			$table->string('action_image');
			$table->string('action_video');
			$table->json('action_items');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('about_pages');
	}
};
