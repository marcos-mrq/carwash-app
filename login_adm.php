<?php 
	include 'conect.php';
	session_start();

	$nome = $_POST["username"];
	$password = $_POST["pp"];

	// echo $email.",".$password;

	if (!isset($email) && !isset($password)) {
		header("Location: index_adm.php");
		exit;
	}else{

	if (($nome == "") || ($password == "")) {
		$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Verifique se os campos estão preenchidos!','error');</script>";
		header("Location: index_adm.php");

	}else{

		$sql = "SELECT * FROM usuarios WHERE Nome = '$nome' AND PalavraPasse = '$password'";

		$query = $Conn->query($sql);
		$linhas = $query->fetch_assoc();
		if (!$linhas) {
			// $_SESSION['error'] = "Palavra-passe ou username incorreto";
			$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Palavra-passe ou username incorreto!','error');</script>";
			header("Location: index_adm.php");
		} else{
			$_SESSION['user_id'] = $linhas['Id'];
			header("Location: Carwash/index.php");
		}


	}

}

?>

<?php 
	// include 'conect.php';
	// session_start();

	// $Nome = $_POST["username"];
	// $password = $_POST["pp"];

	// // echo $email.",".$password;

	// if (!isset($Nome) && !isset($password)) {
	// 	header("Location: index_adm.php");
	// 	exit;
	// }else{

	// if (($Nome == "") || ($password == "")) {
	// 	$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Verifique se os campos estão preenchidos!','error');</script>";
	// 	header("Location: index_adm.php");

	// }
	
	// else{

		// $sql = "SELECT * FROM usuarios WHERE Nome = '$Nome' AND PalavraPasse = '$password'";

		// $query = $Conn->query($sql);
		// $linhas = $query->fetch_assoc();
		// if (!$linhas) {
		// 	// $_SESSION['error'] = "Palavra-passe ou username incorreto";
		// 	$_SESSION['msg'] = "<script>Swal.fire('Erro ao entrar na sua conta','Palavra-passe ou username incorreto!','error');</script>";
		// 	header("Location: index_adm.php");
		// } else{
        //     $_SESSION['user_id'] = $linhas['Id'];
		// 	header("Location: Carwash/index.php");
		// }


	// }

// }
	// $sql = "SELECT * FROM empresas where Nome='$nome' and Palavra_Passe='$pass'";
	// $query = $Conn->query($sql);
	


?>
