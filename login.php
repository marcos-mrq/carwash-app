<?php 
	include 'conect.php';
	session_start();

	$email = $_POST["email"];
	$password = $_POST["pp"];

	// echo $email.",".$password;

	if (!isset($email) && !isset($password)) {
		header("Location: index.php");
		exit;
	}else{

	if (($email == "") || ($password == "")) {
		$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Verifique se os campos estão preenchidos!','error');</script>";
		header("Location: index.php");

	}
	
	else{

		$sql = "SELECT * FROM usuarios WHERE Email = '$email' AND PalavraPasse = '$password'";

		$query = $Conn->query($sql);
		$linhas = $query->fetch_assoc();
		if (!$linhas) {
			// $_SESSION['error'] = "Palavra-passe ou username incorreto";
			$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Palavra-passe ou username incorreto!','error');</script>";
			header("Location: index.php");
		} else{
			$_SESSION['user_id'] = $linhas['Id'];
			header("Location: Carwash/index.php");
		}


	}

}
	


?>
