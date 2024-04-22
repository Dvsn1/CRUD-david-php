<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados do produto
        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:50',
            'descricao' => 'required|max:200',
            'preco' => 'required|numeric|min:0',
            'data_validade' => 'required|date|after_or_equal:today',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        // Se a validação falhar, retorna um erro 422 com os detalhes dos erros
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Cria um novo produto
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->data_validade = $request->data_validade;
        $produto->imagem = $request->file('imagem')->store('imagens');
        $produto->categoria_id = $request->categoria_id;
        $produto->save();

        // Retorna uma resposta de sucesso com o produto criado
        return response()->json(['produto' => $produto], 201);
    }

    // Outros métodos do controlador...
}
