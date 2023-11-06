<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		$logo = "assets/images/logo.png";
		Settings::create([
			'name' => 'Website Name',
			'logo' => $logo,
			'about' => 'CBO',
			'phone' => '0772032435',
			'email' => 'info' . env("APP_URL"),
			'address' => 'Kampala',
			'fb_link' => null,
			'twitter_link' => null,
			'whatsapp_no' => null,
		]);
	}
}
