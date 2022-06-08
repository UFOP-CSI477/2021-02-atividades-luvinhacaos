<?php

namespace App\Http\Controllers;

use App\Models\Ponto;
use App\Models\Voto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PontoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $pontos = Ponto::orderBy('id')->get();
            return view('pontos.index', ['pontos' => $pontos]);
        } else {
            session()->flash('mensagem', 'Necessário login com e-mail docente!');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pontos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ponto::create($request->all());
        session()->flash('mensagem', 'Pauta cadastrada com sucesso!');
        return redirect()->route('pontos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
    public function show(Ponto $ponto)
    {
        return view('pontos.show', ['ponto' => $ponto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponto $ponto)
    {
        return view('pontos.edit', ['ponto' => $ponto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponto $ponto)
    {
        $ponto->fill($request->all());
        $ponto->save();

        session()->flash('mensagem', 'Pauta atualizada!');

        return redirect()->route('pontos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponto $ponto)
    {
        $ponto->delete();
        session()->flash('mensagem', 'Pauta excluída!');
        return redirect()->route('pontos.index');
    }
}
