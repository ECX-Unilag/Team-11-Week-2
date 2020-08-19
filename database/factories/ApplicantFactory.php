<?php

use Faker\Generator as Faker;

$factory->define(App\Applicant::class, function (Faker $faker) {
    return [
        'application_number' => 1,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'middlename' => $faker->firstName,
        'date_of_birth' => $faker->date,
        'phone_no' => $faker->tollFreePhoneNumber,
        'email' => $faker->email,
        'faculties_id' => 1,
        'dept_id' => 1,
        'enrollment_type' => $faker->randomElement(['JAMB', 'Direct Entry']),
        'jamb_no' => $faker->randomNumber,
        'jamb_score' => $faker->numberBetween($min=0, $max=400),
        'gender' => $faker->randomElement(['Male', 'Female']),
        'marital_status' => $faker->randomElement(['single', 'Married', 'Divorced', 'Other']),
        'nationality' => $faker->country,
        'state_of_origin' => $faker->state,
        'local_government' => $faker->city,
        'home_town' => $faker->city,
        'home_address' => $faker->address,
        'applicant_passport' => $faker->word,
        'religion' => $faker->randomElement(['Christianity', 'Islam', 'Traditional', 'Other']),
        'genotype' => $faker->randomElement(['AA', 'AS', 'SS']),
        'bloodgroup' => $faker->randomElement(['A', 'B', 'AB', 'O']),
        'session' => $faker->year.'-'.$faker->year,
        'admission_status' => $faker->randomElement(['admitted', 'processing', 'rejected']),
        'admission_batch' => $faker->randomElement(['A', 'B', 'C']),
        'guardian' => $faker->name,
        'guardian_email' => $faker->email,
        'guardian_phone_no' => $faker->tollFreePhoneNumber,
        ];
});
