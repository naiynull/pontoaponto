<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoProduto;
use App\Models\Pedidos;
use App\Models\Produto;
use App\Models\Cliente;

class controllerEncomendaspecas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $PP;

    public function __construct(PedidoProduto $item){
        $this->PP = $item;
    }


    public function index($id)
    {
        $dados = $this->PP->where('pedidos_id', $id)->get();
        $Pedidos = Pedidos::find($id);
        $Cliente = Cliente::find($Pedidos->cliente_id);
        $dados-> nomecliente = $Cliente->nomecliente;
        foreach($dados as $item){
            $produto = Produto::find($item->produtos_id);
            $item->nomeproduto = $produto->nomeproduto;
        }
        return view('PedidoProduto/exibirPedidoProduto', compact('dados'));
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
        $dados->produtos_id = $request->input('produtos');
        $dados->pedidos_id = $request->input('pedidos_id');
        $dados->quant=$request->input('quant');
        $dados->dataproduto=$request->input('dataproduto');

        if($dados->save())
            return redirect('/pedido')->with('success', 'Produto cadastrado com sucesso!!');
        return redirect('/pedido')->with('danger', 'Erro ao cadastrar Produto!');
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
            return redirect('/pedido')->with('success', 'Contato deletado com sucesso.');
        }
        return redirect('/pedido')->with('danger', 'Erro ao tentar deletar contato.');
    }
}
