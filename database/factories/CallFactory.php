<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Call;
use Faker\Generator as Faker;

$factory->define(Call::class, function (Faker $faker) {
    return [
        'status' => rand(1,3)>1 ? 'abandon' : 'connect',
        'date' => $faker->dateTimeBetween('- 30 days', 'now'),
        'phone_id' => rand(1, 100)
    ];
});
