<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'names' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'special_customer' => $faker->boolean,
        'birthday' => $faker->datetime()
    ];
});