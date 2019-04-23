<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'contact_name' => $faker->name,
        'contact_email' => $faker->safeEmail,
        'contact_message' => $faker->sentence(),
        'contact_date' => now(),
    ];
});
