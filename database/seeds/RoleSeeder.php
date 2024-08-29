<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = Role::create([
            'name' => 'Admin',
        ]);

        $user = Role::create([
            'name' => 'User',
        ]);

        $reader = Role::create([
            'name' => 'Leitor',
        ]);

        $adm->givePermissionTo([
            'ver-formulario-de-processo',
            'criar-processo',
            'update-processo',
            'excluir-processo',
            'ver-lista-de-processos',
            'ver-processo',
            'criar-cliente',
            'formulario-de-cliente',
            'editar-cliente',
            'update-cliente',
            'excluir-cliente',
            'ver-lista-de-clientes',
            'ver-cliente',
            'criar-questionario',
            'formulario-de-questionario',
            'editar-questionario',
            'update-questionario',
            'excluir-questionario',
            'ver-questionario',
            'criar-usuario'
        ]);

        $user->givePermissionTo([
            'ver-formulario-de-processo',
            'criar-processo',
            'update-processo',
            'ver-lista-de-processos',
            'ver-processo',
            'criar-cliente',
            'formulario-de-cliente',
            'editar-cliente',
            'update-cliente',
            'ver-lista-de-clientes',
            'ver-cliente',
            'criar-questionario',
            'formulario-de-questionario',
            'editar-questionario',
            'update-questionario',
            'ver-questionario'
        ]);

        $reader->givePermissionTo([
            'ver-formulario-de-processo',
            'ver-lista-de-processos',
            'ver-processo',
            'ver-lista-de-clientes',
            'ver-cliente',
            'ver-questionario'
        ]);
    }
}
