<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        //
        'url' => 'posts/'. $faker->image('public/assets/img/blog',650, 500, null, true)
    ];
});
