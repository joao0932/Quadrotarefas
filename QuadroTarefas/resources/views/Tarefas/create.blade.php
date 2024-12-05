@extends('layouts.app')

@section('title', 'Criar Nova Tarefa')

@section('content')
    <h1>Criar Nova Tarefa</h1>

    <form action="/tarefas" method="POST">
        @csrf
        <div>
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required>
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao"></textarea>
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection
