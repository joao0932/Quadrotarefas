<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefaController;

Route::get('/', [TarefaController::class, 'index']); // Página de boas-vindas

Route::get('/tarefas', [TarefaController::class, 'listar']); // Lista de todas as tarefas
Route::get('/tarefas/create', [TarefaController::class, 'create']); // Formulário para criar nova tarefa
Route::post('/tarefas', [TarefaController::class, 'store']); // Salvar nova tarefa no banco

Route::get('/tarefas/{id}/edit', [TarefaController::class, 'edit']); // Formulário para editar tarefa
Route::put('/tarefas/{id}', [TarefaController::class, 'update']); // Atualizar tarefa no banco
Route::delete('/tarefas/{id}', [TarefaController::class, 'destroy']); // Excluir tarefa do banco

