<?php
	# Aqui estou trazendo a configuração de conexão do arquivo config.php para a página.
	include("./config/config.php");

	if(isset($_POST['user']) || isset($_POST['password'])){
		if(strlen($_POST['user']) == 0){
			echo "Preencha seu usuário!";
		}
		else if(strlen($_POST['password']) == 0){
			echo "Preencha sua senha!";
		}
		else {
			# Limpando os campos de usuário e senha para trazer mais segurança durante a consulta no banco de dados.
			$usuario = $mysqli -> real_escape_string($_POST['user']);
			$senha = $mysqli -> real_escape_string($_POST['password']);

			$sql_code = "SELECT * FROM dados_usuario WHERE usuario = '$usuario' AND senha = '$senha'";

			$sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

			$quantidade = $sql_query -> num_rows;
			if($quantidade == 1) {
				$usuario = $sql_query -> fetch_assoc();
				if(!isset($_SESSION)){
					session_start();
				}
				$_SESSION['usuario'] = $usuario['usuario'];

				header("Location: home.php");
			}
			else {
				echo "Falha ao logar! Usuário ou senha incorretos.";
			}
		}
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
		<form class="login_form" action="" method="post" name="form" onsubmit="return validated()">
			<div class="font">Usuário</div>
			<input autocomplete="off" type="text" name="user">
			<span id="user_error">O usuário está incorreto!</span>
			<!-- <span class="blank_user">Preencha seu usuário!</span> -->
			<div class="font">Senha</div>
			<input type="password" name="password">
			<span id="pass_error">A senha está incorreta!</span>
			<!-- <span class="blank_pass">Preencha seu usuário!</span> -->
			<button type="submit" name="entrar" class="entrar">Entrar</button>
		</form>
	</div>
</body>
</html>