<?php

use Faker\Generator as Faker;

$factory->define(App\model\Category::class, function (Faker $faker) {
    return [
        "name" => $faker->word,
        "restaurant_id" => 1
    ];
});
