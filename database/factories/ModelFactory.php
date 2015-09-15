<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $userCollection = App\User::all();

    if ($userCollection->count()) {
        $user = $userCollection->random();
    } else {
        $user = factory(App\User::class)->create();
    }

    return [
        'user_id' => $user->id,
        'title' => $faker->sentence(),
        'content' => '<p>' . implode('</p><p>', $faker->paragraphs(rand(3, 12))) . '</p>',
    ];
});
