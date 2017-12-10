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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
				echo "<td>".$resultado['Arquivo']."</td>";
				echo "</tr>";
			}
		?>
	</table> 

	</div>

</body>
</html>