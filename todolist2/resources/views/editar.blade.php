@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
              <form method="post" action="/alterado/{{$ask->id}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />

                <div class="form-group">
                  <label class="label-control">Nome</label>
                  <input class="form-control" type="text" name="nome" value="{{$ask->nome}}"/>
                </div>

                <div class="form-group">
                  <label class="label-control">Descrição</label>
                  <textarea rows="3" name="descricao" class="form-control">{{$ask->descricao}}</textarea>
                </div>

                <div class="form-group">
                  <label class="label-control">Prioridade</label>
                  <select class="form-control" name="prioridade">
                    <option value="1" <?php if($ask->prioridade == 1) {echo 'selected';} ?>>1</option>
                    <option value="2" <?php if($ask->prioridade == 2) {echo 'selected';} ?>>2</option>
                    <option value="3" <?php if($ask->prioridade == 3) {echo 'selected';} ?>>3</option>
                    <option value="4" <?php if($ask->prioridade == 4) {echo 'selected';} ?>>4</option>
                    <option value="5" <?php if($ask->prioridade == 5) {echo 'selected';} ?>>5</option>
                  </select>
                </div>
                <input class="btn btn-primary" type="submit" value="Alterar">
                <a href="/home" style="float:right">Cancelar</a>
              </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
