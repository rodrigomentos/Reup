<?php

use Faker\Generator as Faker;
use App\Repositories\Cliente;
$factory->define(Cliente::class, function (Faker $faker) {
    return [
       'nombre'=>$faker->company,
       'documento'=> $faker->ean8,
       'correo'=>$faker->companyEmail
    ];
});
