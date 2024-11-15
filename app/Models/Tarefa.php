<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['usuario_id', 'descricao', 'setor', 'prioridade', 'status'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}

