<?php 
  session_start();
  include '../conect.php';

  $catego = "";
     $id = $_SESSION['user_id'];
     $nome = "";
     $quer = $Conn->query("SELECT * FROM usuarios where Id = '$id' ");
     while($linhas = $quer->fetch_assoc()){
       $catego = $linhas['Categoria'];
       $nome = $linhas['Nome'];
     }
  
  
  
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="../sweetalert2/package/dist/sweetalert2.all.min.js"></script>
  <script src="../sweetalert2/package/dist/sweetalert2.min.css"></script>
  <title>Área de Consulta</title>

    <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style>
    *{
      font-family: 'Poppins';
    }
  </style>

  <!-- google fonts -->
  <!-- <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet"> -->
</head>

<body class="sidebar-menu-collapsed">
<div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">Collective</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
     //image logo -->

    <div class="logo-icon text-center">
      <a href="index.html" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index.php"><i class="fa fa-tachometer" title="Dashboard"></a></i>
        <?php 
          if(!($catego == "u_n")){
        ?>
        <li><a href="users.php"><i class="fa fa-users" title="Usuários"></i></a></li>
        <?php 
          }else{
            echo "<li><a href='register.php'><i class='fa fa-clipboard' title='Cadastro' class='id'></i></a></li>";
          }
        ?>
        <li class="active"><a href="search.php"><i class="fa fa-search" title="Consultas" class="id"></i></a></li>
        <!-- <li><a href="#"><i class="fa fa-file-text-o" title="Registro de actividades"></i></a></li> -->
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
     <!--  <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a> -->
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <!-- <div class="search-box">
          <form action="#search-results.html" method="get">
            <input class="search-input" placeholder="Search Here..." type="search" id="search">
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div> -->
        <div class="user-dropdown-details d-flex">
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <i class="fa fa-user-circle" id="user"></i>
                   <!--  <div class="user-active">
                      <span></span>
                    </div> -->
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name"><?php 
                        if($catego == "u_n"){
                            echo "$nome";
                        }else{
                          echo $nome;
                        }
                     ?></h5>
                    <span class="status ml-2"><?php 
                        if($catego == "u_n"){
                            echo "Operador";
                            echo "<li><a href='update_users.php'><i class='fa fa-cog'></i>Definições de conta</a></li>";
                        }else{
                          echo "Administrador";
                        } ?></span><br>
                  </li>
                  <li class="logout"> <a href="../logout.php"><i class="fa fa-power-off"></i>Sair</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->
<!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Consultas</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->

    <?php 
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>

    <!-- card heading -->
   <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Veículos Cadastrados</h3>
                  <form action="select.php" method="post">
                  <div class="card-tools">
                    <div class="input-group input-group-sm">  
                      <input type="text" class="form-control" placeholder="pesquise aqui a marca do veículo" name="text-search" id="pesquisa">
                      <div class="input-group-append ml-4">
                        <div class="input-group-append align-items-center">
                            <label for="date1">Data de início:</label>
                            <input type="date" style="width:10em !important; margin-left:10px;" class="form-control" id="date1" name="input_data_ini">
                          </div>
                          <div class="input-group-append align-items-center ml-4">
                            <label for="">Data de fim:</label><br> 
                            <input type="date" style="width:10em !important;  margin-left:10px;" class="form-control" maxlength="" placeholder="Data de fim" id="date2" name="input_data_fim">
                        </div>
                        <div class="btn btn-primary p-0 ml-4"  style="z-index: 0;">
                         <button class="fa fa-search text-light border-0 bg-transparent p-2" name="btn-search"></button>
                        </div>
                         <?php 
                            if($catego == "adm"){
                         ?>
                        <div class="p-0 ml-4" style="z-index:0;">
                         <button type="submit" class="btn btn-primary" name="btn-rel" formtarget="_blank">Gerar Relatório</button>
                        </div>
                        <?php 
                            }elseif($catego == "u_n"){
                        ?> 
                            <div class="p-0 ml-4" style="z-index: 0;">
                            <button type="submit" class="btn btn-primary" name="btn-relatorio" formtarget="_blank">Gerar Relatório</button>
                            </div>
                        <?php 
                            }
                         ?>
                      </div>
                    </div>
                        <!-- <br>
                        <select class="form-control col-2"­ onchange="change()" id="select_p">
                            <option>Marca</option>
                            <option>Matrícula</option>
                         </select> -->
                  </div>
                  <!-- <div class="input-group-append align-items-center">
                    <label for="date1">Data de início:</label>
                    <input type="date" style="width:10em !important; margin-left:10px;" class="form-control" id="date1" name="input_data_ini">
                  </div>
                  <br>
                  <div class="input-group-append align-items-center">
                    <label for="">Data de fim:</label><br> 
                    <input type="date" style="width:10em !important;  margin-left:10px;" class="form-control" maxlength="" placeholder="Data de fim" id="date2" name="input_data_fim">
                  </div> -->
                  <!-- /.card-tools -->
                  </form>
              </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped table-bordered text-center">
                      <thead class="thead-default">
                        <tr>                                                  
                          <th class="">Marca</th>                                                 
                          <th class="">Modelo</th>                                                 
                          <th class="">Matrícula</th>                                                 
                          <th class="">Cilindragem</th>                                                 
                          <th class="">Data de Registro</th>                                                 
                          <th class="">Tipo de Veículo</th>                                                 
                          <th class="">Preço</th>
                          <?php 
                            if( !($catego == "adm") ){
                          ?>
                          <th class=""></th>
                          <?php 
                            }else {
                          ?>
                            <th class="">Cadastrado por</th>
                          <?php
                            }
                          ?>

                          <?php
                            if( !($catego == "adm") ){
                          ?>
                          <th class=""><button class="fa fa-check border-0 bg-transparent text-info" id="btn-check"></button></th>                                                 
                          <?php
                            }else{}
                          ?>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <form action="delet_file.php" method="post">
                          <?php  
                              include '../conect.php';
                              $sql = "SELECT * FROM veiculo order by Id desc";
                              $query = $Conn->query($sql);

                              // print_r($linhas);
                              //while($row = $q->fetch_assoc()){ 
                                //$cad = $row["Nome"];
                              $q = $Conn->query("SELECT Nome from usuarios JOIN veiculo ON usuarios.Id = veiculo.id_user order by veiculo.Id desc");
                              while ($linhas = $query->fetch_assoc()) {
                               $user = $q->fetch_assoc();
                              // print_r($users = $q->fetch_assoc());
                                 $id = $linhas['Id'];
                                 echo "<tr><td>".$linhas['Marca_veiculo']."</td>";
                                 echo "<td>".$linhas['Modelo_veiculo']."</td>";
                                 echo "<td>".$linhas['Matricula']."</td>";
                                 echo "<td>".$linhas['Cilindragem']."</td>";
                                 echo "<td>".$linhas['Data_registro']."</td>";
                                 echo "<td>".$linhas['Tipo_veiculo']."</td>";
                                 echo "<td>".$linhas['Preco']."Kz</td>";
                                 if( !($catego == "adm") ){
                                  echo "<td><span class='fa fa-pencil'></span>&nbsp;<a href='update.php?id=$id' class='text-info'>Editar</a></td>";
                                 }else{
                                    echo "<td>". $user['Nome'] ."</td>";
                                  }

                                  if( !($catego == "adm") ){
                                    echo "<td><input type='checkbox' name='checkbox[]' class='check' value='$id' id='checkbox[]'></td></tr>";
                                   }else{}
                            }


                          ?>
                          
                        </tr>

                      </tbody>
                    </table>
                    <!-- /.table -->
                  </div>
                  <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                  <div class="mailbox-controls">
                    <div class="float-right" style="margin: 10px 5px;">
                      <!-- <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                          <i class="fa fa-chevron-left"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm">
                          <i class="fa fa-chevron-right"></i>
                        </button>
                      </div> -->
                      <!-- /.btn-group -->
                    </div>
                    <!-- /.float-right -->
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
    </section>
    <br>  
      <?php
        if($catego == "u_n"){
      ?>
      <input type="submit" class="btn btn-outline-primary mr-3" value="Deletar" name="enviar">
      <?php
        }else{}
      ?>
        </form> 
    
    <!-- //content block style 7 -->

  </div>
  <!-- //content -->
    <?php
        if($catego == "u_n"){
      ?>
    <div class="container-fluid ml-4 p-0" style="padding: 0;">
      <a href="register.php" class="btn btn-outline-primary">Adicionar</a>
    </div>
    <?php
        }else{}
      ?>

</div>
<!-- main content end-->
</section>
<!-- Modal-Registro de Actividades -->
<!-- Fim registro de Actividades -->
<!--footer section start-->
<footer class="dashboard">
  <p>&copy 2022 Todos os diretos reservados  | Design by <span class="text-primary">Marcos Marques</span></p>
</footer>
<!--footer section end-->
<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>

<script>
  var btn = document.querySelector('#btn-check');
  var checkboxs = document.querySelectorAll('.check');

  btn.addEventListener('click', () => {
     for(var current of checkboxs){
        current.checked = !current.checked
     }
  })

  var troca = document.querySelector("#select_p");
  var search = document.querySelector("#pesquisa");

  function change(){
    if(troca.value == "Marca"){
      search.placeholder = "pesquise aqui a marca do veículo";
    }else{
      search.placeholder = "pesquise aqui a matrícula do veículo";
    }
  }

</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>