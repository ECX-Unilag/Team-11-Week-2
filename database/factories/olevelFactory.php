<?php

use Faker\Generator as Faker;

$factory->define(App\Applicant_olevel::class, function (Faker $faker) {
    return [
        'application_number' => $faker->numberBetween($min=1, $max=5),
        'type' => $faker->randomElement(['WASSCE', 'NECO', 'IGCSE', 'Other']),
        'subject1' => $faker->word,
        'grade1' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject2' => $faker->word,
        'grade2' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject3' => $faker->word,
        'grade3' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject4' => $faker->word,
        'grade4' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject5' => $faker->word,
        'grade5' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject6' => $faker->word,
        'grade6' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject7' => $faker->word,
        'grade7' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject8' => $faker->word,
        'grade8' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
        'subject9' => $faker->word,
        'grade9' => $faker->randomElement(['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9']),
    ];
});
