<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
	$users = App\User::pluck('id')->toArray();
	$posts = App\Post::pluck('id')->toArray();
    return [
        'comment_author' => $faker->randomElement($users),
        'post_id' => $faker->randomElement($posts),
        'content' => $faker->sentence(),
        'post_date' => now(),
    ];
});
