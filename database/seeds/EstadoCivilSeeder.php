<?php

use App\Models\EstadoCivil;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados_civis = [
            'Solteiro',
            'Casado',
            'Divorciado',
            'Viúvo'
        ];

        foreach ($estados_civis as $estado_civil) {
            EstadoCivil::create([
                'estado_civil_nome' => $estado_civil
            ]);
        }
    }
}
