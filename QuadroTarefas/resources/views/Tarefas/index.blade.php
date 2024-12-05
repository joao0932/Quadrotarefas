@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <h1>Lista de Tarefas</h1>
    
    @if ($tarefas->isEmpty())
        <p>Não há tarefas cadastradas.</p>
    @else
        <ul>
            @foreach ($tarefas as $tarefa)
                <li>
                    <div>
                        <span>{{ $tarefa->titulo }}</span>
                        <small>{{ $tarefa->descricao }}</small>
                    </div>
                    <div>
                        <a href="/tarefas/{{ $tarefa->id }}/edit">Editar</a>
                        <a href="#" style="color: red;" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tarefa->id }}').submit();">Excluir</a>
                    </div>
                    <form id="delete-form-{{ $tarefa->id }}" action="/tarefas/{{ $tarefa->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
    
    <p><a href="/tarefas/create">Adicionar nova tarefa</a></p>
@endsection

