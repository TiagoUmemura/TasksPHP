<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Listar Tasks</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

	<div class="container well" id="tasks">
        <h4>Listar Tasks</h4>
    </div>

    <div class="container well">

	<table class="table table-striped">
		<tr>
			<th>Codigo</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Arquivo</th>
		</tr>

		<?php
			include ('conexaoBanco.php');
			$executa = $pdo->query("SELECT * FROM tasks");

			foreach($executa as $resultado){
				echo "<tr>";
				echo "<td>".$resultado['Codigo']."</td>";
				echo "<td>".$resultado['Nome']."</td>";
				echo "<td>".$resultado['Descricao']."</td>";
				echo "<td><a href=".$resultado['Arquivo'].">".$resultado['Arquivo']."</a></td>";
				echo "</tr>";
			}
		?>
	</table> 

	<!-- Botao voltar-->
	<form action="taskMain.php">
    	<input type="submit" value="Voltar" />
	</form>

	</div>

</body>
</html>