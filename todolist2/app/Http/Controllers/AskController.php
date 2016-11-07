<?php

namespace TodoList\Http\Controllers;

use Illuminate\Http\Request;

use TodoList\Http\Requests;

use TodoList\Ask;

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
}
