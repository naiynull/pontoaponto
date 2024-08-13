<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class controllerUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Cliente::all();
        return view('Cliente/exibeCliente', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente/novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Cliente();
        $dados->nomecliente = $request->input('nomecliente');
        $dados->telefonecliente = $request->input('telefonecliente');
        $dados->emailcliente = $request->input('emailcliente');
        $dados->enderecocliente = $request->input('enderecocliente');

        if($dados->save())
            return redirect('/cliente')->with('success', 'Cliente cadastrado com sucesso!!');
        return redirect('/cliente')->with('danger', 'Erro ao cadastrar Cliente!');
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
        $dados = Cliente::find($id);
        if(isset($dados)){
            return view('Cliente/editarCliente', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Cliente::find($id);
        if(isset($dados)){
            $dados->telefonecliente = $request->input('telefonecliente');
            $dados->enderecocliente = $request->input('enderecocliente');
            $dados->save();
            return redirect('/cliente')->with('success', 'Contato atualizado com sucesso.');
        }
        return redirect('/cliente')->with('danger', 'Erro ao tentar atualizar contato.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Cliente::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/cliente')->with('success', 'Contato deletado com sucesso.');
        }
        return redirect('/cliente')->with('danger', 'Erro ao tentar deletar contato.');
    }
}
