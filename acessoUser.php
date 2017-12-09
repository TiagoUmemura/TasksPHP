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
	}else{
		echo "tem conta";
	}
?>