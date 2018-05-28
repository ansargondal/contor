<?php

use contactin\Model\Contact\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'image_path' => $faker->image(),
        'user_id' => 1
    ];
});
