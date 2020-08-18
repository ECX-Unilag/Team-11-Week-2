<?php

use Faker\Generator as Faker;

$factory->define(App\Sponsor::class, function (Faker $faker) {
    return [
        'application_number' => $faker->numberBetween($min=1, $max=5),
        'sponsor_name' => $faker->name,
        'sponsor_address' => $faker->address,
        'sponsor_phone' => $faker->tollFreePhoneNumber,
        'sponsor_email' => $faker->email,
    ];
});
