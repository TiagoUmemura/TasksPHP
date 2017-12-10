<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo_remover];
	echo $codigo;

	$executa = $pdo->query("SELECT * FROM tasks WHERE Codigo = '$codigo'");

	//verificar se trouxe algum registro
	if($executa->rowCount() == 0){
		echo ("<script>alert('Codigo nao encontrado!');window.location.assign('../project1/taskMain.php');</script>");
	}else{
		foreach($executa as $resultado){
				echo "Arquivo: ".$resultado['Arquivo'].";"."<br>";
				unlink($resultado['Arquivo']);
		}

		$pdo->query("DELETE FROM tasks WHERE Codigo = '$codigo'");

		//header("Location: taskMain.php");
		echo ("<script>alert('Task removida com sucesso!');window.location.assign('../project1/taskMain.php');</script>");
	}

?>