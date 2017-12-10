<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo_alterar];
	$nome = $_POST[nome_alterar];
	$descricao = $_POST[descricao_alterar];
	$arquivo = $_FILES["arquivo_alterar"]["name"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["arquivo_alterar"]["name"]);
	
	echo $codigo."<br>";
	echo $nome."<br>";
	echo $descricao."<br>";
	echo $target_file."<br>";
	echo $_FILES['arquivo_alterar']['tmp_name']."<br>";

	if($nome != ''){
		echo "nome preenchido"."<br>";
		$pdo->query("UPDATE tasks SET Nome = '$nome' WHERE Codigo = '$codigo'");
	}

	if($descricao != ''){
		echo "descricao preenchido"."<br>";
		$pdo->query("UPDATE tasks SET Descricao = '$descricao' WHERE Codigo = '$codigo'");
	}

	if($arquivo != ''){
		echo "arquivo descricao preenchido"."<br>";
	}
?>