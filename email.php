<?php
    session_start();
    include 'conect.php';
    
    $mail =  $_POST["mail_address"];
    $nome = "";
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);

    if( $mail && !empty($mail)){
        // echo $mail;
        $quer = $Conn->query("SELECT * FROM usuarios WHERE Email = '$mail'");
        // $q = $Conn->query($quer);
        $num_row = mysqli_num_rows($quer);

        if($num_row > 0){

            while($row = $quer->fetch_assoc()) {
                $nome = $row['Nome'];
            }

            $senha_nova = substr(md5(time()),0,6);

            // echo $nome;

            $update = $Conn->query("UPDATE usuarios SET PalavraPasse = '$senha_nova' WHERE Email = '$mail' AND Categoria = 'u_n'");
            // $up = $Conn->query($update);

            mail($mail,"Assunto","Sua nova Palavra-Passe Sr.$nome $senha_nova","SGES(Sistema de Gestão de Estação de Servíço");

            $_SESSION['msg'] = "<p class='alert alert-success'>Operação realizada com sucesso! Nova Senha foi enviada no seu email.</p>";
            header("Location: recuperar.php");
        }else{
            $_SESSION['msg'] = "<p class='alert alert-danger'>Email inválido! Não encontramos nenhuma conta com esse email.</p>";
            header("Location: recuperar.php");   
            // echo "error";
        }
           
    }else{
        $_SESSION['msg'] = "<p class='alert alert-danger'>Email inválido! Não encontramos nenhuma conta com esse email.</p>";
        header("Location: recuperar.php");
    }






?>