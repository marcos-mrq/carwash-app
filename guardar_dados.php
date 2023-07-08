<?php 
	include 'conect.php';
	session_start();

	$nome = (isset($_POST["nome"])) ? $_POST["nome"] : empty($nome);
	$telefone = (isset($_POST["tel"])) ? $_POST["tel"] : empty($telefone);
	$email = (isset($_POST["email"])) ? $_POST["email"] : empty($email);
	$pass = (isset($_POST["pp"])) ? $_POST["pp"] : empty($pass);

	if ( empty($nome) || empty($email) || empty($pass) || empty($telefone) ) {
		// $_SESSION['error'] = "<script>alert('Verifique se os campos estão preenchidos!');</script>";
		$_SESSION['error'] = "Verifique se todos os campos estão preenchidos!";
		header("Location: cadastramento.php");
	} else {
		$sql = "INSERT INTO entidades(Nome,Numero_Tel,Email,Palavra_Passe) 
		VALUES ('$nome','$telefone','$email','$pass')";
		$q = $Conn->query($sql);
		$_SESSION['error'] = "Cadastrado feito com sucesso!";
		header("Location: cadastramento.php");
	}


	// $sql = "SELECT * FROM empresas";
	// $query = $Conn->query($sql);
	
	// while ($linhas = $query->fetch_assoc()) {
	// 	echo "<p>ID > ".$linhas['ID']."</p>";
	// 	echo "<p>Nome > ".$linhas['Nome']."</p>";
	// 	echo "<p>Numero de telefone > ".$linhas['Numero_Tel']."</p>";
	// 	echo "<p>Email > ".$linhas['Email']."</p>";
	// 	echo "<p>Palavra-passe > ".$linhas['Palavra_Passe']."</p><br>";
	// }
?>

