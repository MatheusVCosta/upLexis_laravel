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
        // Criar usuários administradores
        $this->userAdmins();
    }

    private function userAdmins(){

        // Método de criação do usuario
        User::create([
            'name' => 'admin',
            'password' => bcrypt('admin')
        ]);

        $this->command->info('Usuário admin criado!');

        User::create([
            'name' => 'joao',
            'password' => bcrypt('admin')
        ]);

        $this->command->info('Usuário joao criado!');
    }
}
