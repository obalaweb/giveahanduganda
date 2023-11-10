<?php

namespace Database\Seeders;

use App\Models\HomePageSlider;
use Illuminate\Database\Seeder;

class HomePageSliderSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		HomePageSlider::create([
			'title' => 'Your donation helps change lives',
			'description' => 'Providing solutions For future Donations, Management, & Change.',
			'slogan' => 'WHAT WE DO',
			'image' => 'assets/images/banner/home3-banner-image.png',
		]);
	}
}
