<?php

use App\Models\Settings;

function getLogoUrl() {
	if (logoUrl()) {
		return asset('storage') . '/' . logoUrl();
	} else {
		return null;
	}
}

function getName() {
	return Settings::pluck('name')->first();
}

function logoUrl() {
	return Settings::pluck('logo')->first();
}

function appPhone() {
	return Settings::pluck('phone')->first();
}

function getEmail() {
	return Settings::pluck('email')->first();
}

function getAddress() {
	return Settings::pluck('address')->first();
}

function getFlink() {
	return Settings::pluck('fb_link')->first();
}

function getWLink() {
	return 'https://wa.me/' . Settings::pluck('whatsapp_no')->first();
}

function getTLink() {
	return Settings::pluck('twitter_link')->first();
}

function getAbout() {
	return Settings::pluck('about')->first();
}
