<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo_remover];
	echo $codigo;

	$executa = $pdo->query("SELECT * FROM tasks WHERE Codigo = '$codigo'");
	foreach($executa as $resultado){
			echo "Arquivo: ".$resultado['Arquivo'].";"."<br>";
			unlink($resultado['Arquivo']);
	}

	$pdo->query("DELETE FROM tasks WHERE Codigo = '$codigo'");

	header("Location: taskMain.php");

?>