<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'profissao_id' => $this->faker->numberBetween(1, 10),
        'cbo' => $this->faker->numerify('########'),
        'cliente_nome' => $this->faker->name,
        'cliente_cpf' => $this->faker->numerify('###.###.###-##'),
        'cliente_rg' => $this->faker->numerify('##########-#'),
        'cliente_data_nascimento' => $this->faker->date(),
        'cliente_telefone' => $this->faker->numerify('(98) 9####-####'),
        'cliente_email' => $this->faker->unique()->safeEmail,
        'cliente_sexo' => $this->faker->randomElement([0, 1, 2]),
        'cliente_ativo' => 1,
    ];
});
