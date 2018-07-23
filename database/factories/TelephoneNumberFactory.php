<?php

use Faker\Generator as Faker;

$factory->define(App\TelephoneNumber::class, function (Faker $faker) {
    return [
        'telephone_number' => $faker->phoneNumber
    ];
});
