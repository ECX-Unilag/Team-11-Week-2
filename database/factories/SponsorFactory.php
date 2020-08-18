<?php

use Faker\Generator as Faker;

$factory->define(App\Sponsor::class, function (Faker $faker) {
    return [
        'applicant_id' => $faker->numberBetween($min=1, $max=5),
        'sponsor_firstname' => $faker->firstName,
        'sponsor_lastname' => $faker->lastName,
        'sponsor_address' => $faker->address,
        'sponsor_phone' => $faker->tollFreePhoneNumber,
        'sponsor_email' => $faker->email,
    ];
});
