<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;
use Illuminate\Support\Facades\DB;


class controllerEncomendas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Pedido::all();
        return view('Pedidos/exibePedido', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pedidos/novoPedido');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Pedido();
        $dados->Nome = $request->input('nomeproduto');
        $dados->Estoque = $request->input('estoqueproduto');
        if($dados->save())
            return redirect('/pedido')->with('success', 'Pedidos cadastrado com sucesso!!');
        return redirect('/pedido')->with('danger', 'Erro ao cadastrar Pedidos!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Peca::find($id);
        if(isset($dados))
            return view('Pedidos/editaProduto', compact('dados'));
        return redirect('/pedido')->with('danger', 'Cadastro dos produtos não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Pedidos::find($id);
        if(isset($dados)){
        $dados->Nome = $request->input('nome');
        $dados->Estoque = $request->input('estoque');
        $dados->Preco = $request->input('preco');
        $dados->Material = $request->input('material');
        $dados->Descricao = $request->input('descricao');
        $dados->Categoria = $request->input('categoria');
         
            $dados->save();
            return redirect('/pedido')->with('success', 'Cadastro do 
            Peça atualizado com sucesso!!');
        }
        return redirect('/pedido')->with('danger', 'Cadastro de produto não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Pedidos::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/pedido')->with('success', 'Contato deletado com sucesso.');
        }
        return redirect('/pedido')->with('danger', 'Erro ao tentar deletar contato.');
    }
}

