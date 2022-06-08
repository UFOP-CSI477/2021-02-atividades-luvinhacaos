<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use App\Models\Ponto;
use Illuminate\Http\Request;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votos = Voto::orderBy('id')->get();
        return view('votos.index', ['votos' => $votos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pontos = Ponto::orderBy('nome')->get();
        return view('votos.create', ['pontos' => $pontos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Voto::create($request->all());
        session()->flash('mensagem', 'Voto registrado com sucesso!');
        return redirect()->route('pontos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function show(Voto $voto)
    {
        return view('votos.show', ['voto' => $voto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function edit(Voto $voto)
    {
        return view('votos.edit', ['voto' => $voto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voto $voto)
    {
        $voto->fill($request->all());
        $voto->save();

        session()->flash('mensagem', 'Voto atualizado!');

        return redirect()->route('votos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voto $voto)
    {
        $voto->delete();
        session()->flash('mensagem', 'Voto excluído!');
        return redirect()->route('votos.index');
    }
}
