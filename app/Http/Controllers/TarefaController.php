<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string',
            'setor' => 'required|string',
            'prioridade' => 'required|in:baixa,média,alta',
            'usuario_id' => 'required|exists:usuarios,id',
        ]);

        Tarefa::create($request->all());

        return redirect()->back()->with('success', 'Tarefa cadastrada com sucesso!');
    }

    public function index()
    {
        $tarefas = Tarefa::with('usuario')->get();
        return view('tarefas.index', compact('tarefas'));
    }
}
