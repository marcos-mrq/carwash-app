<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="_css/estilo1.css">
	<title>SYSTEM CARWASH</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<script src="sweetalert2/package/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2/package/dist/sweetalert2.min.css"></script>
	<!-- <script>
		Alert("Username ou Palavra-passe incorrecta");
	</script> -->
</head>
<body>
	<div class="content">
		<div class="img">
			<img src="_imagens/tela.jpg" class="log-img">
		</div>

		<div class="form">
			<div class="title">
				<h3>Entrar na conta administrativa</h3>
			</div>
			<br><br>

			<div class="cont">
				
				<form action="login_adm.php" method="POST">
					<?php 

					if(isset($_SESSION['msg'])){
						?>
				<div class="error">
					<?php  
						$messege = $_SESSION['msg'];
						echo $messege; 
						unset($_SESSION['msg']); 
					?>
				 </div>
				<?php 
					}

				 ?>
					<input type="text" placeholder="Username" class="us-n" name="username">
					<br><br>

					<!-- <a href="#" class="senha">Esqueceu a sua senha ?</a> -->
					<br><br>

					<input type="password" placeholder="Password" class="ps-wr" name="pp">
					<br><br>
					<!-- <div class="cred">
					<input type="checkbox">&nbsp;<label for="">Lembrar Credencias</label>
					</div> -->
					<br>
					<button class="submit" type="submit">Entrar</button>
					<br><br>
					<!-- <a href="local_cadastro.html" class="cad">Cadastrar</a> -->
				</form>
			</div>

		</div>




	</div>
	
</body>
</html>