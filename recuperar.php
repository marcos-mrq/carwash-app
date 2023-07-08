<?php session_start();?>

<!DOCTYPE html>
<html style="font-family: Poppins;">
  <head>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sweetalert2/package/dist/sweetalert2.min.css">
	  <script src="sweetalert2/package/dist/sweetalert2.all.min.js"></script>
    <title></title>
    <style>
       #painel{
         width: 450px;
         min-width: 450px;
         max-width: 450px;
         /* position: absolute; */
         margin-top: 20%;
         transform: translateY(-50%);
         border-radius: 5px;
       }

       .small{
         font-size: 10pt;
         color: #606060;
       }

    </style>

  </head>
  <body class="d-f justify-content-center align-items-center" style="background-color: #eee;">

  <div class="container-fluid col-6 bg-white p-4" style="box-shadow: 2px 2px 10px lightgray" id="painel">
    <div class="title text-center mb-4">
      <h4 class="text-primary">Esqueceu a sua Palavra-passe ?</h4>
    </div>

    <div class="body">
      <div class="text-gray mb-4">
        <p class="small">Digite o endereço de e-mail verificado da sua conta de usuário e nós lhe enviaremos uma nova senha.</p>
      </div>
      <div class="form-group">
         <form action="email.php" method="post">
            <div class="mb-4"><input type="email" name="mail_address" placeholder="Insira o seu email" class="form-control col-lg-12" required></div>
            <?php 
                if(isset($_SESSION['msg'])){
                  // var_dump($_SESSION['msg']);
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }else{ /*echo "Pão";*/}
             ?>
            <div class="mb-4"><input type="submit" value="Enviar" class="form-control col-lg-12 btn btn-primary"></div>
            <div class="mb-4"><a href="index.php" class="form-control col-lg-12 btn btn-secondary">Voltar</a></div>  
         </form>
      </div>
    </div>
  </div>

 

    
  </body>
</html>
