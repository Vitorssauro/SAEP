<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'email'];

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}