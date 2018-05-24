<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia quos soluta atque suscipit dolore assumenda accusantium deleniti cum consequatur distinctio totam,', // lorem
        'price' => $faker->numberBetween($min = 100, $max = 999),
        'image' => '',
        'category_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'image' => 'public/sample.jpg',
        'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia quos soluta atque suscipit dolore assumenda accusantium deleniti cum consequatur distinctio totam,'
    ];
});
