<?php
	include ('conexaoBanco.php');
	$codigo = $_POST[codigo];
	$nome = $_POST[nome];
	$descricao = $_POST[descricao];
	$arquivo = $_FILES["arquivo"]["name"];

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["arquivo"]["name"]);

	echo $codigo."<br>";
	echo $nome."<br>";
	echo $descricao."<br>";
	echo $target_file."<br>";
	echo $_FILES['arquivo']['tmp_name']."<br>";


	$executa = $pdo->query("SELECT * FROM tasks WHERE Codigo = '$codigo'");
	//verificar se codigo de task ja existe
	if($executa->rowCount() == 0){
		if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $target_file)) {
	        echo "The file ". basename( $_FILES["arquivo"]["name"]). " has been uploaded.";
	    } else {
	        echo "Upload failed with error code " . $_FILES['arquivo']['error'];
	    }

	    $executa1 = $pdo->query("INSERT INTO tasks(Codigo, Nome, Descricao, Arquivo) VALUES ('$_POST[codigo]', '$_POST[nome]', '$_POST[descricao]', '$target_file')");
	    //header("Location: taskMain.php");
	    echo ("<script>alert('Task inserida com sucesso!');window.location.assign('../project1/taskMain.php');</script>");
	}else{
		echo ("<script>alert('Task já existe!');window.location.assign('../project1/taskMain.php');</script>");	
	}
?>