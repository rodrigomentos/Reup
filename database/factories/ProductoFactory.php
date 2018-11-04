<?php

use Faker\Generator as Faker;
use App\Repositories\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->word,
        'precio'=>$faker->numberBetween(100,  500),
        'stock'=>$faker->numberBetween(10, 50),
        'descripcion'=>$faker->sentence
    ];
});
