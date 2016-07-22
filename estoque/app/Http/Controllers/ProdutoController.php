<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

	public function lista(){

		$html = '<h1>Listagem de produtos com laravel</h1>';

		$html .= '<ul>';


		$produtos = DB::select('select * from produtos');

		foreach($produtos as $prod){
			$html .= '<li> Nome: ' . $prod->nome . ',
						Descrição: ' . $prod->descricao . '</li>';
		}

		$html .= '</ul>';

		return $html;
	}

}