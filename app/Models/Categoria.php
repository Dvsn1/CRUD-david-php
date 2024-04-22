<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public static function rules(): array
    {
        return [
            'nome' => 'required|string|max:100'
        ];
    }
}
