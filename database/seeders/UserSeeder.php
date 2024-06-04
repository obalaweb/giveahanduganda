<?php

namespace Database\Seeders;

use App\Enums\UserStatusEnum;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => Hash::make('password'),
            'status' => Arr::random(UserStatusEnum::cases()),
        ]);
    }
}
