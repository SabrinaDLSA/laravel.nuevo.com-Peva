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

$factory->define(nuevo\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'username' => $faker->username,
        'remember_token' => str_random(10),
        'role'  => $faker->randomElement(['user'])
     ];
});
$factory->define(nuevo\Actors::class, function ($faker) {
    return [
        'Name' => $faker->name,
        'Birthplace' => $faker->city,
        'Nationality' => $faker->country,
        'Photo' => $faker->imageUrl($width = 640, $height = 480, 'people'),
        'Description' => $faker->paragraph,
        'Age'  => $faker->randomDigit
     ];
});
$factory->define(nuevo\Character::class, function ($faker) {
    return [
        'Name' => $faker->name,
        'Status' => 'Alive',
        'Photo' => $faker->imageUrl($width = 120, $height = 480, 'people'),
        'Description' => $faker->paragraph,
        'Age'  => $faker->randomDigit,
        'actor_id' => $faker->numberBetween($min = 1, $max = 50),
        'serie_id' => $faker->numberBetween($min = 1, $max = 3)
     ];
});
$factory->define(nuevo\Episodes::class, function ($faker) {
    return [
        'Name' => $faker->name,
        'Episode' => $faker->numberBetween($min = 1, $max = 50),
        'Photo' => $faker->imageUrl($width = 640, $height = 480),
        'Description' => $faker->paragraph,
        'season_id' => '1',
        'serie_id' => $faker->numberBetween($min = 1, $max = 3)
     ];
});
