<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'image'=>$faker->imageUrl($width=100,$height=100),
        'description'=>$faker->sentence
    ];
});
