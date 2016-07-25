<?php
namespace estoque\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

	public function lista(){

		$produtos = DB::select('select * from produtos');

		return view('listagem')->with('produtos',$produtos);
	}

	public function mostra(){
		$id = Request::input('id','0');

		$produto = DB::select('select * from produtos where id = ?',[$id]);

		if(empty($produto)){
			return "Esse produto não existe";
		}

		return view('detalhes')->with('p',$produto[0]);
	}

}