<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/relatorios.css') }}" rel="stylesheet">
    <title>Relatório de Composição de Pedidos.pdf</title>
</head>
<body>
    <h3>Relatório de Composição de Pedidos - Emitido em {{$data}}</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Produtor</th>
                <th>Quantidade</th>
                <th>Unidade</th>
                <th>Valor Un.</th>
                <th>Valor Total</th>
                <th>Nome Consumidor</th>
                <th>Local Retirada</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)

                @foreach($itensPedido as $itemPedido)

                    @if($itemPedido->produto_id == $produto->id)

                        <?php
                            $unidadeVenda = \projetoGCA\UnidadeVenda::find($produto->unidadevenda_id);
                            $valor_item = $itemPedido->quantidade * $produto->preco;
                            $pedido = $itemPedido->pedido;
                            $consumidor = $pedido->consumidor->usuario;
                            $local_retirada = $pedido->evento->local_retirada;
                        ?>

                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->produtor->nome}}</td>
                            <td>{{$itemPedido->quantidade}}</td>
                            <td>{{$unidadeVenda->nome}}</td>
                            <td>{{'R$'.number_format($produto->preco,2)}}</td>
                            <td>{{'R$'.number_format($valor_item,2)}}</td>
                            <td>{{$consumidor->name}}</td>
                            <td>{{$local_retirada}}</td>
                        </tr>

                    @endif

                @endforeach

            @endforeach
            
        </tbody>
    </table>
    
</body>
</html>