<?php

namespace TodoList\Http\Controllers;

use Illuminate\Http\Request;

use TodoList\Http\Requests;

use TodoList\Ask;

use TodoList\Http\Requests\AskRequest;

use Auth;

  class AskController extends Controller
{
    function excluir($id){
      if(Auth::check()){
        $tarefa = Ask::find($id);
        $tarefa->delete();
        return redirect('/home')->withInput();
      }
      else{
        return redirect('home');
      }
    }

    function adicionar(AskRequest $req){
      Ask::create($req->all());

      return redirect('home')->withInput();
    }

    function redirectEditar($id){
      return view('editar')->with('ask',Ask::find($id));
    }

    function editar(AskRequest $req){
      $ask = Ask::find($req->id);

      $ask->nome = $req->nome;
      $ask->descricao = $req->descricao;
      $ask->prioridade = $req->prioridade;

      $ask->save();

      return redirect('home');
    }
}
