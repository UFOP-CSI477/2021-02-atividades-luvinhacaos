@extends('principal')

<?php
$totalizadores = ['doacoes' => 0, 'itens' => 0];
$totalItens = 0;
?>

@section('body')
    <div class="container my-3">
        <h1>Área Geral</h1>

        <hr>

        <h4>Doações</h4>
        <table class="table mt-4">
            <thead class="table-light">
                <tr>
                    <th>Entidade</th>
                    <th>Doações Recebidas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doacoes as $doacao)
                    <tr>
                        <td>
                            {{ $doacao->nome }}
                        </td>
                        <td>
                            {{ $doacao->quantidade }}
                        </td>
                    </tr>

                    <?php $totalizadores['doacoes'] += $doacao->quantidade; ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        Totalizador
                    </td>
                    <td>
                        {{ $totalizadores['doacoes'] }}
                    </td>
                </tr>
            </tfoot>
        </table>

        <hr class="my-5"/>

        <h4>Itens</h4>
        <table class="table mt-4">
            <thead class="table-light">
                <tr>
                    <th>Item</th>
                    <th>Quantidade</th>
                    <th>Porcentagem %</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itens as $item)
                    <?php $totalItens += $item->quantidade;?>
                @endforeach
                @foreach ($itens as $item)
                    <tr>
                        <td>
                            {{ $item->descricao }}
                        </td>
                        <td>
                            {{ $item->quantidade }}
                        </td>
                        <td>
                            {{ round($item->quantidade / $totalItens * 100, 2) }}
                        </td>
                    </tr>

                    <?php $totalizadores['itens'] += $item->quantidade; ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        Totalizador
                    </td>
                    <td>
                        {{ $totalizadores['itens'] }}
                    </td>
                    <td>
                        100
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
