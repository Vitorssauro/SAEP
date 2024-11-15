<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarefaController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('tarefas', TarefaController::class);

