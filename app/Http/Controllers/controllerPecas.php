<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\PedidoProduto;
use Illuminate\Support\Facades\DB;


class controllerPecas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Produto::all();
        return view('Produto/exibirproduto', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produto/novoProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Produto();
        $dados->Nome = $request->input('nomeproduto');
        $dados->Estoque = $request->input('estoqueproduto');
        $dados->Preco = $request->input('precoproduto');
        $dados->Material = $request->input('materialproduto');
        $dados->Descricao = $request->input('descricaoproduto');
        $dados->Categoria = $request->input('categoria');
        if($dados->save())
            return redirect('/Produto')->with('success', 'Produto cadastrado com sucesso!!');
        return redirect('/Produto')->with('danger', 'Erro ao cadastrar Produto!');
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
            return view('Produto/editaProduto', compact('dados'));
        return redirect('/Produto')->with('danger', 'Cadastro dos produtos não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Produto::find($id);
        if(isset($dados)){
        $dados->Nome = $request->input('nome');
        $dados->Estoque = $request->input('estoque');
        $dados->Preco = $request->input('preco');
        $dados->Material = $request->input('material');
        $dados->Descricao = $request->input('descricao');
        $dados->Categoria = $request->input('categoria');
         
            $dados->save();
            return redirect('/Produto')->with('success', 'Cadastro do 
            Peça atualizado com sucesso!!');
        }
        return redirect('/Produto')->with('danger', 'Cadastro de produto não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Produto::find($id);
        if(isset($dados)){
            $livros = PedidoProduto::where('produtos_id', '=', $id)->first();
            if(!isset($Pedidos)){
                $dados->delete();
                return redirect('/Produto')->with('success', 'Cadastro do P deletado com sucesso!!');
            }else{
                return redirect('/Produto')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/Produto')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    }

