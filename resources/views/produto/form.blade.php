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
        <a href="{{ route('produto.index') }}">Listar produtos</a>

        <form action="{{ route('produto.salvar') }}" method="POST">
            @csrf
            Produto:<input type="text" name="name"><br>
            Preço:<input type="text" name="price"><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
