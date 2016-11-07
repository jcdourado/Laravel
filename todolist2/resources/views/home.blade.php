@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tarefas:
                  <a href="/adicionar" style="float:right;">+ Nova Tarefa</a>
                </div>

                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Prioridade</th>
                      <th>Ações</th>
                    </tr>
                    @foreach(TodoList\User::find(Auth::user()->id)->asks as $row)
                      @if($row->prioridade > 4)
                        <tr class="danger">
                      @else
                        <tr>
                      @endif
                          <td>{{ $row->id }}</td>
                          <td>{{ $row->nome }}</td>
                          <td>{{ $row->prioridade }}</td>
                          <td><a href="/editar/{{ $row->id }}">Editar</a>
                            <a href="/excluir/{{ $row->id }}">Excluir</a>
                          </td>
                      </tr>
                    @endforeach
                  </table>
                  @if(old('id'))
                    <p>{{old('id')}}</p>
                  @endif
                  @if(old('nome'))
                    <p class="bg-success">Produto {{ old('nome')}} adicionado com sucesso!</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
