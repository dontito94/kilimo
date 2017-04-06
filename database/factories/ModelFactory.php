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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'surname' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'city' => $faker->text,
        'municipal' => $faker->text,
        'ward' => $faker->text,
        'street' => $faker->text,
        'phone_number' => $faker->text,
        'birth_date' => $faker->date,
    ];
});

$factory->define(App\Pastor::class, function (Faker\Generator $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users)
    ];
});
 