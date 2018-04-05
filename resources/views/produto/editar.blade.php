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
        <a href="{{ route('produto.index') }}">Listar</a> |
        <a href="{{ route('produto.formulario') }}">Cadastrar</a> |
        <a href="{{ route('produto.excluir', ['id' => $produto->id]) }}">Excluir</a>
        <br><br>

        <form action="{{ route('produto.atualizar', ['id' => $produto->id]) }}" method="POST">
            @csrf
            Produto:<input type="text" name="name" value="{{ $produto->name }}"><br>
            Preço:<input type="text" name="price" value="{{ $produto->price }}"><br>
            <input type="submit" value="Editar">
        </form>
    </body>
</html>
