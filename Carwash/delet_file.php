<?php
	include '../conect.php';
	session_start();

	$click = $_POST['enviar'];

	if (isset($click) && isset($_POST['checkbox'])) {
		foreach ($_POST['checkbox'] as $checkbox) {
			$sq = "DELETE FROM veiculo where Id = $checkbox";
			$q = $Conn->query($sq);
		}
		$_SESSION['msg'] = "<script>Swal.fire('Eliminado com sucesso!','','success');</script>";
		header("Location: search.php");
	} else{
			$_SESSION['msg'] = "<script>Swal.fire('Erro ao Eiminar','Nenhum dado seleccionado','error');</script>";
		header("Location: search.php");
	}


?>