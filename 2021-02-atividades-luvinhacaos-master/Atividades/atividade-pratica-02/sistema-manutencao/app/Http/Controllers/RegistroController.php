<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $registros = Registro::orderBy('datalimite')->get();
        $user = Auth::user();

        if (Auth::check()) {
            return view('registros.index', ['registros' => $registros], ['user' => $user]);
        } else {
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

        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('name')->get();
        if (Auth::check()) {
            if (Auth::user()->name == 'admin') {
                return view('registros.create', ['equipamentos' => $equipamentos, 'users' => $users]);
            } else {
                session()->flash('mensagem', 'Usuário não autorizado!');
                return redirect()->route('principal');
            }
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        session()->flash('mensagem', 'Registro cadastrado!');
        return redirect()->route('registros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        if (Auth::check()) {
            if (Auth::user()->name == 'admin') {
                return view('registros.show', ['registro' => $registro]);
            } else {
                session()->flash('mensagem', 'Usuário não autorizado.');
                return redirect()->route('principal');
            }
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        $equipamentos = Equipamento::orderBy('nome')->get();
        $users = User::orderBy('name')->get();
        return view('registros.edit', [
            'registro' => $registro,
            'equipamentos' => $equipamentos,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $registro->fill($request->all());
        $registro->save();

        session()->flash('mensagem', 'Registro atualizado!');

        return redirect()->route('registros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        session()->flash('mensagem', 'Registro deletado');
        return redirect()->route('registros.index');
    }
}
