<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // Exibir a página inicial
    public function index()
    {
        return view('welcome'); // Página de boas-vindas
    }

    // Exibir todas as tarefas
    public function listar()
    {
        $tarefas = Tarefa::all(); // Obtemos todas as tarefas do banco de dados
        return view('tarefas.index', compact('tarefas')); // Retorna a lista para a view
    }

    // Exibir o formulário para criar uma nova tarefa
    public function create()
    {
        return view('tarefas.create'); // Retorna a view com o formulário
    }

    // Salvar nova tarefa no banco de dados
    public function store(Request $request)
    {
        // Validação simples
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable',
        ]);

        // Criar a tarefa
        Tarefa::create($request->all());
        return redirect('/tarefas'); // Redireciona para a lista de tarefas
    }

    // Exibir o formulário para editar uma tarefa
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id); // Encontra a tarefa pelo id
        return view('tarefas.edit', compact('tarefa')); // Retorna a view de edição
    }

    // Atualizar a tarefa no banco de dados
    public function update(Request $request, $id)
    {
        // Validação simples
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable',
        ]);

        // Encontra a tarefa e atualiza
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());

        return redirect('/tarefas'); // Redireciona para a lista de tarefas
    }

    // Excluir uma tarefa
    public function destroy($id)
    {
        // Encontra a tarefa e exclui
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return redirect('/tarefas'); // Redireciona para a lista de tarefas
    }
}
