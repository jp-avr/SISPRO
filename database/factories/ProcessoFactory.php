<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use App\Models\Processo;
use Faker\Generator as Faker;

$factory->define(Processo::class, function (Faker $faker) {
    return [
        'cliente_id' => factory(App\Models\Cliente::class), // Cria o Cliente e atribui o ID ao processo
        'tipo_processo_id' => $this->faker->numberBetween(1,2),
        'parte_atingida_id' => $this->faker->numberBetween(1, 5),
        'proc_numero_proc' => $this->faker->unique()->numerify('#####'),
        'proc_data_ini_doenca' => $this->faker->date(),
        'proc_data_ini_incapacidade' => $this->faker->date(),
        'proc_historia' => $this->faker->paragraph(),
        'proc_consideracoes' => $this->faker->sentence(),
    ];
});
