<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissão de Processo
        Permission::create([
            'name' => 'ver-formulario-de-processo',
        ]);

        Permission::create([
            'name' => 'criar-processo',

        ]);

        Permission::create([
            'name' => 'update-processo',

        ]);

        Permission::create([
            'name' => 'excluir-processo',

        ]);

        Permission::create([
            'name' => 'ver-lista-de-processos',

        ]);

        Permission::create([
            'name' => 'ver-processo',
        ]);

        //Permissão de Cliente
        Permission::create([
            'name' => 'criar-cliente',
        ]);

        Permission::create([
            'name' => 'formulario-de-cliente',

        ]);

        Permission::create([
            'name' => 'editar-cliente'
        ]);

        Permission::create([
            'name' => 'update-cliente',

        ]);

        Permission::create([
            'name' => 'excluir-cliente',

        ]);

        Permission::create([
            'name' => 'ver-lista-de-clientes',
        ]);

        Permission::create([
            'name' => 'ver-cliente',

        ]);

        //Permissão de Questionario
        Permission::create([
            'name' => 'criar-questionario',
        ]);

        Permission::create([
            'name' => 'formulario-de-questionario',
        ]);

        Permission::create([
            'name' => 'editar-questionario',

        ]);

        Permission::create([
            'name' => 'update-questionario',
        ]);

        Permission::create([
            'name' => 'excluir-questionario',
        ]);

        Permission::create([
            'name' => 'ver-questionario',
        ]);

        Permission::create([
            'name' => 'criar-usuario',
        ]);

        Permission::create([
            'name' => 'ver-sidebar',
        ]);
    }
}
