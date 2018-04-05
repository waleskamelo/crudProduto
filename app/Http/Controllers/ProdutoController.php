<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{

    // método da controller - action
    public function index()
    {
        //retorna todos os produtos do banco atraves do model de Produto
    	$produtos = Produto::all();

        //retorna a view que esta na pasta produto e o arquivo chamado index.blade.php
        //passando como parametro os produtos da variavel acima
    	return view('produto.index', compact('produtos'));
    }

    public function form()
    {
        //retorna a view produto.form
        return view('produto.form');
    }

    public function editar($id)
    {
        //procura na tabela de produtos o id passado
        $produto = Produto::find($id);

        //retorna a view produto.editar passado o produto achado pelo o model na linha acima
        return view('produto.editar', ['produto' => $produto]);
    }

    public function salvar(Request $request)
    {
        //recebe todos os parametros que veio na requisição, que foi acionado no formulario
        //da view produto.formulario
        $formulario = $request->all();

        //cria um produto na tabela de produtos atraves da model Produto
        Produto::create($formulario);

        //redireciona pra rota de produto.formulario
        return redirect()->route('produto.formulario');
    }

    public function excluir($id) 
    {
        //acha o produto com esse id na tabela de produtos atraves do model de Produto
        $produto = Produto::find($id);
        
        //deleta o produto da tabela de produtos atraves do model Produto
        $produto->delete();

        //redireciona para a rota produto.index
        return redirect()->route('produto.index');
    }

    public function atualizar($id, Request $request) 
    {
        //acha o produto e ja atualiza os dados desse produto de acordo com os dados que foi passado no 
        //formulario da view produto.editar
        Produto::find($id)->update($request->all());

        //redireciona pra rota de produto.editar
        return redirect()->route('produto.editar', ['id' => $id]);
    }
}