<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    function deselvolvedores() {
        return $this->belongsToMany(Desenvolvedor::class, 'alocacoes')->withPivot('horas_semanais');
    }
}
