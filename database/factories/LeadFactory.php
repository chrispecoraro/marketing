<?php

use Faker\Generator as Faker;
use Faker\Provider\Address as Address;

$factory->define(App\Lead::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email_address' => $faker->safeEmail,
        'postal_code' => str_pad($faker->numberBetween(0,99999),5,'0'),
    ];

});
