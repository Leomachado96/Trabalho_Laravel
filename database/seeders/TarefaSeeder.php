<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarefa;


class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarefa::create([
            'nome' => 'Leonardo',
            'email' => 'leonardo@teste.com',
            'telefone' => '(42)911223344',
            'descricao' => 'Preenchimento teste 1',
            'completa' => true,
        ]);

        Tarefa::create([
            'nome' => 'Maria',
            'email' => 'maria@teste.com',
            'telefone' => '(42)922334455',
            'descricao' => 'NULL',
            'completa' => false,
        ]);

        Tarefa::create([
            'nome' => 'Pedro',
            'email' => 'pedro@teste.com',
            'telefone' => 'NULL',
            'descricao' => 'Preenchimento teste 3',
            'completa' => false,
        ]);

        Tarefa::create([
            'nome' => 'Joana',
            'email' => 'joana@teste.com',
            'telefone' => '(42)944556677',
            'descricao' => 'Preenchimento teste 4',
            'completa' => true,
        ]);
    }
}
