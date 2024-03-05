<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => $faker->id,
        'name' => $faker->name,
        'city' => $faker->city,
        'zip' => $faker->zip,
        'dob' => $faker->dob,
        'identification' => $faker->identification,
        'amount' => $faker->amount,
        'status' => $faker->status
    ];
});
