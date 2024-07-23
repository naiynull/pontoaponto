<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Usuario::all();
        return view('exibircliente', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Agenda();
        $dados->nomecliente = $request->input('nomecliente');
        $dados->telefonecliente = $request->input('telefonecliente');
        $dados->emailcliente = $request->input('emailcliente');
        $dados->enderecocliente = $request->input('enderecocliente');
        $dados->save();
        return redirect('/contatos')->with('success', 'Novo contato cadastrado com sucesso.');
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
        $dados = Usuario::find($id);
        if(isset($dados)){
            return view('editarcliente', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Usuario::find($id);
        if(isset($dados)){
            $dados->nomeContato = $request->input('nomecliente');
            $dados->telContato = $request->input('telefonecliente');
            $dados->emailContato = $request->input('emailcliente');
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
        $dados = Usuario::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/cliente')->with('success', 'Contato deletado com sucesso.');
        }
        return redirect('/cliente')->with('danger', 'Erro ao tentar deletar contato.');
    }
}
