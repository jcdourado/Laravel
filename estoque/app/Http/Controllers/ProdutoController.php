<?php
namespace estoque\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller{

	public function lista(){

		$produtos = Produto::all();
		return view('produto.listagem')->with('produtos',$produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);

		if(empty($produto)){
			return "Esse produto não existe";
		}

		return view('produto.detalhes')->with('p',$produto);
	}

	public function novo(){
		return view('produto.novo');
	}

	public function adiciona(){

		Produto::create(Request::all());
		
		return redirect()->action('ProdutoController@lista')->withInput();
	}

	public function listaJson(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}

	public function alterar($id){
		$produto = Produto::find($id);
		return view('produto.altera',array('p' => $produto,'id' => $id));
	}

	public function finish($id){
		$produto = Produto::find($id);
		$produto->nome = Request::input('nome');
		$produto->quantidade = Request::input('quantidade');
		$produto->descricao = Request::input('descricao');
		$produto->valor = Request::input('valor');
		$produto->save();

		return redirect()->action('ProdutoController@lista');
	}
}