@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <h1>Editar Tarefa</h1>

    <form action="/tarefas/{{ $tarefa->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="{{ $tarefa->titulo }}" required>
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao">{{ $tarefa->descricao }}</textarea>
        </div>
        <div>
            <button type="submit">Salvar alterações</button>
        </div>
    </form>
@endsection
