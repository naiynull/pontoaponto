<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerEncomendaspecas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = PedidoProduto::all();
        return view('PedidoProduto/exibeDetalhesPedido', compact('dados'));
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
        
        $dados = new PedidoProduto();
        $dados->Quantidade = $request->input('quant');
        $dados->pedidos_id = $request->input('Pedido');
        $dados->produtos_id = $request->input('produtos_id');


        if($dados->save())
            return redirect('/PedidoProduto')->with('success', 'Produto cadastrado com sucesso!!');
        return redirect('/PedidoProduto')->with('danger', 'Erro ao cadastrar Produto!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = PedidoProduto::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/PedidoProduto')->with('success', 'Contato deletado com sucesso.');
        }
        return redirect('/PedidoProduto')->with('danger', 'Erro ao tentar deletar contato.');
    }
}
