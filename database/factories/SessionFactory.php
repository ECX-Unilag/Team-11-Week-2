<?php

use Faker\Generator as Faker;
use App\Session;

$factory->define(App\Session::class, function (Faker $faker) {
    return [
        'session' => '1970-1971',
    ];
});
