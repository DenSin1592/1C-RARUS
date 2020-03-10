<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'phone' => $faker->e164PhoneNumber,
        'client_id' => rand(1,50),
        'call_id' => rand(1, 1000)
    ];
});
