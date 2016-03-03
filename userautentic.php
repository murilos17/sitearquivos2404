<?php
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	$conexao = mysql_connect('localhost', 'root', '') or die(mysql_error());
	mysql_select_db('cadastrocpm', $conexao) or die(mysql_error());
	$sql = mysql_query("SELECT * FROM cpmusuarios  WHERE usuario = '$usuario' and senha = '$senha'");
	$row = mysql_num_rows($sql);
	if ($row > 0 ) {
		session_start();
		$_SESSION ["usuario"]=$_POST["usuario"];
		$_SESSION ["senha"]=$_POST["senha"];
		echo "<script>alert('Login feito com sucesso!'); location.href='index.html';</script>";
	}
	else{
		echo "<script>alert('Nome de usuário ou senha inválidos!');location.href='login.php';</script>";
	}
?>