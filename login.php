<!DOCTYPE html>
<html>
<head>
	<title>Arquivos 24.04 - Login</title>
	<meta charset="Utf-8">
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body align="center">
	<div align="center" class="login">
		<img src="files/logo.png">
		<form name="loginform" method="post" action="userautentic.php">
			<table align="center">
				<tr>
					<td>Usuário:</td>
					<td><input type="text" autofocus="focus" name="usuario"></input></td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td><input type="password" name="senha" name="senha"></input></td>
				</tr>
			</table>
		<input id="btn_logar" type="submit" name="logar" value="Logar"></input>
		</form>
	</div>

</body>
</html>