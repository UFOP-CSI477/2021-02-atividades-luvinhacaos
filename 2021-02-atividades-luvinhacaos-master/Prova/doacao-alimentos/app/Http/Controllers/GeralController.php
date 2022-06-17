<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeralController extends Controller
{
    public function index()
    {
        $doacoes = DB::select(
            "SELECT
                e.nome,
                SUM(c.quantidade) AS quantidade
            FROM
                coletas c
            INNER JOIN
                entidades e ON (e.id = c.entidade_id)
            GROUP BY
                c.entidade_id"
        );

        $itens = DB::select(
            "SELECT
                i.descricao,
                SUM(c.quantidade) AS quantidade
            FROM
                coletas c
            INNER JOIN
                items i ON (i.id = c.item_id)
           GROUP BY
                i.id"
        );

        return view('geral.index', [
            'doacoes' => $doacoes,
            'itens' => $itens,
        ]);
    }
}
