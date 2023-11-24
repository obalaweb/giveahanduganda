<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;

class HomeContentSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */

	const ITEMS = [
		[
			'name' => 'Education',
			'description' => 'There are many variations of passages of Lorem Ipsum available',
			'icon' => 'icon-i-01',
		],
		[
			'name' => 'Healthy Food',
			'description' => 'There are many variations of passages of Lorem Ipsum available',
			'icon' => 'icon-i-02',
		],
		[
			'name' => 'Medical Help',
			'description' => 'There are many variations of passages of Lorem Ipsum available',
			'icon' => 'icon-i-03',
		],
		[
			'name' => 'Safe Water',
			'description' => 'There are many variations of passages of Lorem Ipsum available',
			'icon' => 'icon-i-04',
		],

	];

	const VOIMAGES = [
		'assets/images/gallery/volunteer-01.jpg',
		'assets/images/gallery/volunteer-05.jpg',
	];

	const MILESTONE = [
		[
			'title' => "89% Program Done",
			'description' => 'Lorem ipsum velit anod ips aliquet enean quis.',
		],
		[
			'title' => "90% Save Children",
			'description' => 'Lorem ipsum velit anod ips aliquet enean quis.',
		],
	];

	public function run(): void {
		HomePage::create([
			'main_image' => 'images/banner/home3-banner-image.png',
			'what_we_do_title' => 'Providing solutions For future Donations, Management, & Change.',
			'what_we_do_description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have tigerpa suffered alteration in some form, by injected humour, or randomise all kinds of projects, big and small, from home.',
			'items' => json_encode(self::ITEMS),
			'about_us_title' => 'If we Helping Each other then the world growing.',
			'about_us_description' => '<p><strong>There are many variations of passages of Lorem Ipsum available, but the majority have tige rpa suffered alteration in some form, by injected humour, or randomised words which don kyapiti look even slightly believable time of vaule less time.</strong></p><p>There are many variations of passages of Lorem Ipsum available, but the majority have tigerpa suffered alteration in some form, by injected humour, or randomised words</p>',
			'about_us_image' => "assets/images/gallery/home3-about.jpg",
			'become_a_volunteer_title' => 'We can help poor people for development.',
			'become_a_volunteer_images' => json_encode(self::VOIMAGES),
			'milestone' => json_encode(self::MILESTONE),
		]);
	}
}