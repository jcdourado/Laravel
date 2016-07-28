<?php
namespace estoque\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

	public function lista(){

		$produtos = DB::select('select * from produtos');

		return view('produto.listagem')->with('produtos',$produtos);
	}

	public function mostra($id){
		$produto = DB::select('select * from produtos where id = ?',[$id]);

		if(empty($produto)){
			return "Esse produto não existe";
		}

		return view('produto.detalhes')->with('p',$produto[0]);
	}

	public function novo(){
		return view('produto.novo');
	}

	public function adiciona(){
		$nome = Request::input('nome');
		$descricao = Request::input('desc');
		$valor = Request::input('valor');
		$quantidade = Request::input('qtd');

		DB::insert('insert into produtos(nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome,$quantidade,$valor,$descricao));

		return view('produto.adicionado')->with('nome',$nome);
	}
}