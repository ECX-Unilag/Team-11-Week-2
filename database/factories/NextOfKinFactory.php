<?php

use Faker\Generator as Faker;

$factory->define(App\Next_of_kin::class, function (Faker $faker) {
    return [
        'applicant_id' => $faker->numberBetween($min=1, $max=5),
        'kin_firstname' => $faker->firstName,
        'kin_lastname' => $faker->lastName,
        'kin_address' => $faker->address,
        'kin_phone' => $faker->tollFreePhoneNumber,
        'kin_email' => $faker->email,
        'kin_relationship' => $faker->word,
    ];
});
