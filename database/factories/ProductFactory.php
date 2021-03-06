<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(1000,5000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,10),
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});
