<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    $name=  $faker->unique()->word(20);
    return [
        //
        'name' => $name,
        'slug' => Str::slug($name),
        'extract' => $faker->text(250),
        'body'=> $faker->text(2000),
        'status'=> $faker->randomElement([1,2]),
        'category_id'=> Category::all()->random()->id,
        'user_id'=> User::all()->random()->id
    ];
});
