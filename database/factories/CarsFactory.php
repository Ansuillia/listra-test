<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;


$factory->define(Car::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    
    return [
        'description' => $faker->vehicle,
        'price' => $faker->randomFloat(2, 20000, 150000)
    ];
});
