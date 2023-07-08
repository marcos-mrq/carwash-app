<?php
	return $Conn = mysqli_connect('localhost','root','','carwash_new'); 
	if (!$Conn) {
		die("Conexao Falhada: ".mysqli_connect_error());
	}
?>