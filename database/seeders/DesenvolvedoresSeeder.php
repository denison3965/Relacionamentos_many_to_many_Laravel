<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert([
            'nome' =>  'Denison de Almeida',
            'cargo' => 'Analista de Sistemas Júnior'
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' =>  'Ana de Almeida',
            'cargo' => 'Analista de Sistemas Pleno'
        ]);

        DB::table('desenvolvedores')->insert([
            'nome' =>  'Bia = de Almeida',
            'cargo' => 'Analista de Sistemas Senior'
        ]);
    }
}
