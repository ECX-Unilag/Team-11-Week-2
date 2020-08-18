<?php

use Faker\Generator as Faker;

$factory->define(App\Next_of_kin::class, function (Faker $faker) {
    return [
        'application_number' => $faker->numberBetween($min=1, $max=5),
        'kin_name' => $faker->name,
        'kin_address' => $faker->address,
        'kin_phone' => $faker->tollFreePhoneNumber,
        'kin_email' => $faker->email,
        'kin_relationship' => $faker->word,
    ];
});
