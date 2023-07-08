<?php 
	include '../conect.php';
	session_start();

	$username = ($_POST["user_name"]) ?? (empty($username));
	$categoria = ($_POST["user_function"]);
    $tel = ($_POST["user_number"]) ?? (empty($tel));
	$email = ($_POST["user_email"]);
	$senha = ($_POST["user_password"]) ?? (empty($senha));
	
	$email = filter_var($email,FILTER_VALIDATE_EMAIL);

	if ( (empty($username)) || (empty($tel)) || !($email) || (empty($senha)) ) {
		$_SESSION['msg'] = "<script>Swal.fire('Erro ao cadastrar','Verifique se os campos estão preenchidos!','error');</script>";
		header("Location: users.php");
	} else {
		if ($categoria == "Administrador") {
			$categoria = "adm";
		}else{
			$categoria = "u_n";
		}
        $sql = "INSERT INTO usuarios(Nome,Categoria,N_tel, Email,PalavraPasse) 
        VALUES ('$username','$categoria','$tel','$email','$senha')";
        $q = $Conn->query($sql);
        $_SESSION['msg'] = "<script>Swal.fire('Cadastrado com sucesso!','','success');</script>";
        header("Location: users.php");
	}