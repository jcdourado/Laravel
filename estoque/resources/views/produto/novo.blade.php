@extends('layout.principal')

@section('conteudo')
<h1>Novo Produto</h1>


<form action="/produtos/adiciona">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" name="nome" >
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input class="form-control" name="desc">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" name="valor">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="qtd">
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@stop