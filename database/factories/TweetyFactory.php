<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\tweety;
use Faker\Generator as Faker;

$factory->define(tweety::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'body'=>$faker->sentence,
    ];
});
