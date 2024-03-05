<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Withdraw;
use Faker\Generator as Faker;

$factory->define(Withdraw::class, function (Faker $faker) {
    return [
        'user_id' => $this->faker->title,
        'name' => $this->faker->title,
        'city' => $this->faker->title,
        'zip' => $this->faker->title,
        'dob' => $this->faker->title,
        'identification' => $this->faker->title,
        'amount' => $this->faker->title,
        'status' => $this->faker->title
    ];
});
