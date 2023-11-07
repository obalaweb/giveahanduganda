<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('teams', function (Blueprint $table) {
			$table->id();
			$table->foreignIdFor(User::class)->constrained('users');
			$table->text('about');
			$table->string('profile');
			$table->string('expertise');
			$table->boolean('status')->default(false);
			$table->string('fb_link');
			$table->string('twitter_link');
			$table->string('whatsapp_no');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('teams');
	}
};
