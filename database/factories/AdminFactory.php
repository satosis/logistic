<?php

/** @var Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Hash;


$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'admin@gmail.com',
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make(123456789),
    ];
});
