<?php

use Faker\Generator as Faker;

$factory->define(Model\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'user_id' => 1
    ];
});
