<?php

use Faker\Generator as Faker;

$factory->define(\App\Note::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'email'       => $faker->email,
        'content'       => $faker->sentence,
        'creator'       => \App\User::first()->id,
    ];
});
