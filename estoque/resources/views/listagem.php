<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/app.css">
	<title>Controle de Estoque</title>

</head>
<body>
<div class="container">
	<h1>Listagem de produtos</h1>
	<table class="table table-striped table-bordered table-hover">
		<?php foreach($produtos as $p): ?>
		<tr>
			<td><?=$p->nome ?></td>			
			<td><?=$p->valor ?></td>
			<td><?=$p->descricao ?></td>
			<td><?=$p->quantidade ?></td>
			<td><a href="/produtos/mostra/<?= $p->id ?>"><span class="glyphicon glyphicon-search"></span></a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
</body>
</html>