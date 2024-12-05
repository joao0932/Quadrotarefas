<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory; // Permite o uso das fábricas do Laravel, se necessário

    // Defina os campos que podem ser preenchidos de forma massiva (para evitar vulnerabilidades de mass assignment)
    protected $fillable = ['titulo', 'descricao'];

    // Caso sua tabela não utilize os campos "created_at" e "updated_at", desative os timestamps
    // public $timestamps = false;
}
