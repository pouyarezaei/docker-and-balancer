<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use App\User;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'title' => $faker->text,
        'body' => $faker->text(500),
    ];
});
