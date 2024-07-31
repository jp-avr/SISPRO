<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

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
            'permission_nome' => 'Formulario de processo',
            'permission' => 'processo.inserir'
        ]);

        Permission::create([
            'permission_nome' => 'Criar processo',
            'permission' => 'processo.store'
        ]);

        Permission::create([
            'permission_nome' => 'Update processo',
            'permission' => 'processo.update'
        ]);

        Permission::create([
            'permission_nome' => 'Excluir processo',
            'permission' => 'processo.destroy'
        ]);

        Permission::create([
            'permission_nome' => 'Ver lista de processos',
            'permission' => 'processo.index'
        ]);

        Permission::create([
            'permission_nome' => 'ver processo',
            'permission' => 'processo.questionarios'
        ]);

        //Permissão de Cliente
        Permission::create([
            'permission_nome' => 'Criar cliente',
            'permission' => 'cliente.store'
        ]);

        Permission::create([
            'permission_nome' => 'Formulario de cliente',
            'permission' => 'cliente.inserir'
        ]);

        Permission::create([
            'permission_nome' => 'Editar cliente',
            'permission' => 'cliente.edit'
        ]);

        Permission::create([
            'permission_nome' => 'Update cliente',
            'permission' => 'cliente.update'
        ]);

        Permission::create([
            'permission_nome' => 'Excluir cliente',
            'permission' => 'cliente.destroy'
        ]);

        Permission::create([
            'permission_nome' => 'Ver lista de clientes',
            'permission' => 'cliente.index'
        ]);

        Permission::create([
            'permission_nome' => 'ver cliente',
            'permission' => 'cliente.processos'
        ]);

        //Permissão de Questionario
        Permission::create([
            'permission_nome' => 'Criar questionario',
            'permission' => 'questionario.store'
        ]);

        Permission::create([
            'permission_nome' => 'Formulario de questionario',
            'permission' => 'questionario.inserir'
        ]);

        Permission::create([
            'permission_nome' => 'Editar questionario',
            'permission' => 'questionario.edit'
        ]);

        Permission::create([
            'permission_nome' => 'Update questionario',
            'permission' => 'questionario.update'
        ]);

        Permission::create([
            'permission_nome' => 'Excluir questionario',
            'permission' => 'questionario.destroy'
        ]);

        Permission::create([
            'permission_nome' => 'ver questionario',
            'permission' => 'questionario.resultado'
        ]);
    }
}
