<?php
	include("./config/validation.php")

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="./images/icon_logo.png">
	<title>Magazine Luiza</title>
</head>
<body>
	<h1>Bem-vindo! <?php echo $_SESSION['usuario']?></h1>
	<p><a href="./config/logout.php">Sair</a></p>
	
</body>
</html>