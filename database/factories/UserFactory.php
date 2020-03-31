<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
    	'roles' =>'factory:App\Role',
        'nama_depan' => $faker->nama_depan,
        'nama_belakang' => $faker->nama_belakang,
        'email' => $faker->unique()->safeEmail,
        'no_hp' => $faker->randomNumber(12),
		  'alamat' => $faker->alamat,
		  'unggas' => 'factory:App\Unggas',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10)
    ];
});
