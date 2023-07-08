<?php 

	include '../conect.php';
	session_start();
	
	$marca = (isset($_POST["input-marca"])) ? $_POST["input-marca"] : empty($marca);
	$modelo = (isset($_POST["input-modelo"])) ? $_POST["input-modelo"] : empty($modelo);
	$matricula = (isset($_POST["input-matricula"])) ? $_POST["input-matricula"] : empty($matricula);
	$cilind  = (isset($_POST["input-cilindragem"])) ? $_POST["input-cilindragem"] : empty($cilind);
	$tipoveiculo = (isset($_POST["select_veiculo"])) ? $_POST["select_veiculo"] : empty($tipoveiculo);
	$id = $_GET['id'];
	
	if (isset($id)) {
		if ( empty($marca) || empty($modelo) || empty($matricula) || empty($cilind) || empty($tipoveiculo) ) {
		$_SESSION['msg'] = "<script>Swal.fire('Erro ao actualizar','Verifique se os campos estão preenchidos!','error');</script>";
		header("Location: search.php");
		} else {
		$sql = "UPDATE veiculo SET Marca_veiculo = '$marca', Modelo_veiculo = '$modelo', Matricula = '$matricula', Cilindragem = '$cilind', Tipo_veiculo = '$tipoveiculo' WHERE Id ='$id'";
		$q = $Conn->query($sql);
		$_SESSION['msg'] = "<script>Swal.fire('Actualizado com sucesso!','','success');</script>";
			header("Location: search.php");
		}

	}else{
		header('Location: search.php');
	}
