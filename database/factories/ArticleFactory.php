<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => User::where('first_name', 'Super')->first()->id,
        'title' => $faker->words(3, true),
        'body' => $faker->paragraphs(3, true),

    ];
});
