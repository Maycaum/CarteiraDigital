<?php
session_start()
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<title>Carteira Virtual</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
<!------------------------------------------------------------------------------------------>

</head>
<body>
	<a href="index.php"><img src="img/verde.png" alt="verde" width="187,5" height="187,5" class="img"></a>

	<div class="login">
		<form class="login-form" method="POST" action="envia_formulario.php">
			<span class="login-texto">
				<?php
					if(isset($_SESSION["nome"])){
						echo 'deu certo';
					}
				?>
			</span>
		</form>
	</div>

	
</body>
</html>

