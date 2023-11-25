<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */

	const ITEMS = [
		[
			'title' => 'Become a Volunteer',
			'description' => 'There are many variations offertei passages of Lorem Ipsum but time the majority have',
			'icon' => 'assets/images/icons/video2-icon1.png',
			'link' => 'become-a-volunteer',
		], [
			'title' => 'Quck funding',
			'description' => 'There are many variations offertei passages of Lorem Ipsum but time the majority have',
			'icon' => 'assets/images/icons/video2-icon2.png',
			'link' => 'contact',
		], [
			'title' => 'Start Donation',
			'description' => 'There are many variations offertei passages of Lorem Ipsum but time the majority have',
			'icon' => 'assets/images/icons/video2-icon3.png',
			'link' => 'donate',
		],
	];

	public function run(): void {
		AboutPage::create([
			'common_title' => 'We are Donatee',
			'common_description' => 'There are many variations of passages of Lorem Ipsum available but majority have
suffered alteration in some form',
			'cta_title' => 'See what we do for the poor people
and the children',
			'cta_image' => 'assets/images/background/video-bg.jpg',
			'cta_video' => 'https://www.youtube.com/watch?v=kS0X-yIsB64',
			'title' => 'If we Helping Each other then the world growing.',
			'description' => '<h6>Everything melancholy uncommonly but solicitude inhabiting projection off Connec stimulated estimating excellence an to impression. ladies she basket season ageaui
                                    uneasy saw. Discourse unwilling am no described.</h6><p>Frequently partiality possession resolution at or appearance unaffected he me Enga ged its was evident pleased husband. Ye goodness felicity do disposal dwelling nodi First am plate jokes of the year of heaven time.</p>',
			'achivement' => 'We’re Satisfied more than 30k Donars.',
			'image' => 'assets/images/gallery/about-02.png',
			'action_title' => 'Help them whenever they
are in need',
			'action_video' => 'https://www.youtube.com/watch?v=kS0X-yIsB64',
			'action_image' => 'assets/images/background/video-bg.jpg',
			'action_items' => json_encode(self::ITEMS),
		]);
	}
}
