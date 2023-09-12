<?php
	return $Conn = mysqli_connect('127.0.0.1','root','','carwash'); 
	if (!$Conn) {
		die("Conexao Falhada: ".mysqli_connect_error());
	}
?>