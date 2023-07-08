<?php 

	include '../conect.php';
	session_start();
	
	$nome = (isset($_POST["input-name"])) ? $_POST["input-name"] : empty($nome);
	$tel = (isset($_POST["input-phone"])) ? $_POST["input-phone"] : empty($tel);
	$email = (isset($_POST["input-email"])) ? $_POST["input-email"] : empty($email);
	$pass_word  = (isset($_POST["input-pass_word"])) ? $_POST["input-pass_word"] : empty($pass_word);
	$id = $_GET['id'];
	
	if (isset($id)) {
		if ( empty($nome) || empty($tel) || empty($email) || empty($pass_word) ) {
		$_SESSION['msg'] = "<script>Swal.fire('Erro ao actualizar','Verifique se os campos estão preenchidos!','error');</script>";
		header("Location: index.php");
		} else {
		$sql = "UPDATE usuarios SET Nome = '$nome', N_tel = '$tel', Email = '$email', PalavraPasse = '$pass_word' WHERE Id ='$id'";
		$q = $Conn->query($sql);
		$_SESSION['msg'] = "<script>Swal.fire('Actualizado com sucesso!','','success');</script>";
			header("Location: index.php");
		}

	}else{
		header('Location: index.php');
	}