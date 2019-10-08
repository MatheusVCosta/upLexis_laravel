<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Quando rodar o comando no terminal, vai apagar todos os dados da tabela
        // Eloquent::unguard();

        // Criar usuários administradores
        $this->userAdmins();
    }

    private function userAdmins(){

        // Método de criação do usuario
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $this->command->info('Usuário admin criado!');

    }
}
