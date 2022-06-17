<?php

namespace App\Http\Controllers;

use App\Models\Coleta;
use App\Models\Entidade;
use App\Models\Item;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coletas.index', ['coletas' =>  Coleta::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coletas.create', [
            'modoEdicao' => false,
            'itens' => Item::all(),
            'entidades' => Entidade::all(),
            'coleta' => new Coleta()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coleta::create($request->all());
        return redirect('coletas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function show(Coleta $coleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Coleta $coleta, $id)
    {
        return view('coletas.form', [
            'modoEdicao' => true,
            'itens' => Item::all(),
            'entidades' => Entidade::all(),
            'coleta' => Coleta::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coleta $coleta, $id)
    {
        $coleta = Coleta::find($id);

        $coleta->item_id = $request->input('item_id');
        $coleta->entidade_id = $request->input('entidade_id');
        $coleta->quantidade = $request->input('quantidade');
        $coleta->data = $request->input('data');
        $coleta->save();

        return redirect('/coletas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coleta  $coleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coleta $coleta, $id)
    {
        Coleta::find($id)->delete();
        return redirect('/coletas');
    }
}
