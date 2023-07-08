<?php  
	session_start();
?>





<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="_css/style-cadastro.css">
	<title>Local de cadastro</title>
</head>
<body>

	<div class="content-regist">
		<div class="title-form">
			<h3>Cadastrar Empresa</h3>
		</div>
		<br>
		<form action="guardar_dados.php" method="POST">
				<div class="part">
						<?php 

							if(isset($_SESSION['error'])){

							?>

					<!-- <section id="section" class="error-message"> -->
							<?php
								$msg = $_SESSION['error'];
								echo "<script>alert('$msg');</script>";
								unset($_SESSION['error']);
							?>
					<!-- </section> -->
					<?php
							}
						?>

						
					<input type="text" name="nome" placeholder="Nome da empresa">
					<input type="tel" name="tel" placeholder="999999999" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" maxlength="9">
				
					<input type="email" placeholder="Email" name="email">
					<input type="password" placeholder="Palavra-Passe" name="pp" minlength="6">

					<input type="submit" value="Cadastrar" class="bt" name="bt">
					<!-- <a href="login.php" class="bt-back">Voltar</a> -->
				</div>
		</form>
	</div>								




	<footer>
		<span>&copy; Todos os direitos reservados | Design by Marcos Cena</span>
	</footer>		
	
</body>
</html>