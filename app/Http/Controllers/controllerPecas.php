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
        $dados->nomeproduto = $request->input('nomeproduto');
        $dados->estoqueproduto = $request->input('estoqueproduto');
        $dados->precoproduto = $request->input('precoproduto');
        $dados->materialproduto = $request->input('materialproduto');
        $dados->descricaoproduto = $request->input('descricaoproduto');
        $dados->categoria = $request->input('categoria');
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
        $dados = Produto::find($id);
        if(isset($dados))
            return view('Produto/editarproduto', compact('dados'));
        return redirect('/Produto')->with('danger', 'Cadastro dos produtos não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Produto::find($id);
        if(isset($dados)){
            $dados->estoqueproduto = $request->input('estoqueproduto');
            $dados->precoproduto = $request->input('precoproduto');
    
            $dados->save();
            return redirect('/Produto')->with('success', 'Cadastro do 
            produto atualizado com sucesso!!');
        }else{
            return redirect('/Produto')->with('danger', 'Cadastro de produto não localizado!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Produto::find($id);
        if(isset($dados)){
            $Pedidos = PedidoProduto::where('produtos_id', '=', $id)->first();
            if(!isset($Pedidos)){
                $dados->delete();
                return redirect('/Produto')->with('success', 'Cadastro do roduto deletado com sucesso!!');
            }else{
                return redirect('/Produto')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/Produto')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    }

