<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'project_name' => $faker->jobTitle,
        'client_name' => $faker->name,
        'hour_rate' => random_int(10, 30),
        'project_type' => sprintf("%s", $faker->randomElement(['hourly', 'fixed'])),
        'fixed_price' => random_int(100, 3000),
        'phone' => $faker->phoneNumber,
    ];
});
