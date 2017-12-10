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

		//procurar registro do arquivo com o codigo no POST
		$executa = $pdo->query("SELECT * FROM tasks WHERE Codigo = '$codigo'");
		foreach($executa as $resultado){
			echo "Arquivo: ".$resultado['Arquivo'].";"."<br>";
			//excluir arquivo antigo
			unlink($resultado['Arquivo']);
		}

		//update do caminho para o caminho do novo arquivo
		$pdo->query("UPDATE tasks SET Arquivo = '$target_file' WHERE Codigo = '$codigo'");

		//Upload novo arquivo
		if (move_uploaded_file($_FILES['arquivo_alterar']['tmp_name'], $target_file)) {
	        echo "The file ". basename( $_FILES["arquivo_alterar"]["name"]). " has been uploaded.";
	    } else {
	        echo "Upload failed with error code " . $_FILES['arquivo_alterar']['error'];
	    }
	}

	header("Location: taskMain.php");
?>