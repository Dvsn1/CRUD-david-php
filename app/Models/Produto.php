<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'preco', 'data_validade', 'imagem', 'categoria_id'
    ];

    public static function rules(): array
    {
        return [
            'nome' => 'required|string|max:50',
            'descricao' => 'required|string|max:200',
            'preco' => 'required|numeric|min:0',
            'data_validade' => 'required|date|after_or_equal:today',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categoria_id' => 'required|exists:categorias,id'
        ];
    }
}
