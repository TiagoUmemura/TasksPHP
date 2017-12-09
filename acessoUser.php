<?php
	include ('conexaoBanco.php');
	$login = $_POST[login_acesso];
	$pwd = $_POST[pwd_acesso];
	echo $login."<br>";
	echo $pwd."<br>";

	$executa = $pdo->query("SELECT * FROM user WHERE login = '$login' AND password='$pwd'");

	print $executa->rowCount();

	foreach($executa as $resultado){
		echo "login: ".$resultado['login'].";"."<br>";
		echo "senha: ".$resultado['password'].";"."<br>";
	}


	if ($executa->rowCount() == 0){
		echo "nao tem conta";
		header("Location: index.html");echo ("<script>alert('Usuário ou senha inválidos!');</script>"); exit;
	}else{
		echo "tem conta";
		if (!isset($_SESSION)) session_start();

		$_SESSION['UsuarioNome'] = $login;
      	$_SESSION['UsuarioSenha'] = $pwd;
      	
      	header("Location: taskMain.php"); exit;
	}
?>