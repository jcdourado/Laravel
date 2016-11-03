<?php

namespace TodoList\Http\Controllers;

use Illuminate\Http\Request;

use TodoList\Http\Requests;

use TodoList\Ask;

class AskController extends Controller
{
    function excluir($id){
      $tarefa = Ask::find($id);
      $tarefa->delete();

      return redirect('/home')->withInput();
    }
}
