<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome' => 'Sistemas de Alocação de Recursos', 'estimativas_horas' => 200]);
        DB::table('projetos')->insert(['nome' => 'Sistemas de Biblioteca', 'estimativas_horas' => 1000]);
        DB::table('projetos')->insert(['nome' => 'Sistemas de Vendas', 'estimativas_horas' => 2000]);
        DB::table('projetos')->insert(['nome' => 'Novo Sistema', 'estimativas_horas' => 5000]);
    }
}
