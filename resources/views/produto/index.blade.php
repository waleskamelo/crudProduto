<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <style>
            table, th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <!-- {{ route('produto.index') }} ira imprimimr a rota que foi definida
         no arquivo de rotas: routes/web.php -->
        <a href="{{ route('produto.formulario') }}">Formulario de Cadastro</a>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>preço</th>
            <th>Ações</th>
        </tr>

        <!-- varre o array de produtos, criando linha por linha da tabela de produtos-->
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->name }}</td>
                <td>{{ $produto->price }}</td>
                <td>
                    <!-- cria os links para editar e excluir o produto -->
                    <a href="{{ route('produto.editar', ['id' => $produto->id]) }}">Editar</a>
                    <a href="{{ route('produto.excluir', ['id' => $produto->id]) }}">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
</html>
