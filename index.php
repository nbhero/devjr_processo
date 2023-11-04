<?php
	include('./config/config.php');
	if (isset($_POST['cadastrar'])){
		
		$id = '';
		$usuario = $_POST['user'];
		$senha = $_POST['password'];

		$result = mysqli_query($conexao,"INSERT INTO dados_usuario(id,usuario,senha) VALUES ('{$id}'{$usuario}','{$senha}')");
	}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./images/icon_logo.png">
	<title>Magazine Luiza</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1 class="label">Magalu</h1>
		<form class="login_form" action="home.html" method="post" name="form" onsubmit="return validated()">
			<div class="font">Usuário</div>
			<input autocomplete="off" type="text" name="user">
			<span id="user_error">O usuário está incorreto!</span>
			<div class="font">Senha</div>
			<input type="password" name="password">
			<div id="pass_error">A senha está incorreta!</div>
			<button type="submit" name="entrar" class="entrar">Entrar</button>
			<button type="button" name="cadastrar" class="cadastrar">Cadastrar</button>
		</form>
	</div>	
	<script src="valid.js"></script>
</body>
</html>