<?php

use App\Models\Desenvolvedor;
use App\Models\Projeto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desenvolvedores_projeto', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach ($desenvolvedores as $dev) {
        echo "<p> Nome do Desenvolvedor: ". $dev->nome . "</p>";
        echo "<p> Cargo do Desenvolvedor: ". $dev->cargo . "</p>";
        echo"<p> Projetos: </p>";
        
        if (count($dev->projetos))
        {
            echo "<ul>";
            foreach ($dev->projetos as $projeto) {
                echo "<li>". $projeto->nome . " | " . $projeto->estimativas_horas . " horas" . " | ". $projeto->pivot->horas_semanais. " horas trabalhadas por semanas " . "</li>";
            }
        echo "</ul>";
        }

        echo "<hr>";

    }

    // return $desenvolvedores->toJson();
});

Route::get('/projetos', function () {
    $projetos = Projeto::with('deselvolvedores')->get();

    return $projetos;
});
