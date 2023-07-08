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
  <title>Usuários</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <script src="../sweetalert2/package/dist/sweetalert2.all.min.js"></script>
  <script src="../sweetalert2/package/dist/sweetalert2.min.css"></script>
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
      <a href="index.php" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="index.php"><i class="fa fa-tachometer" title="Dashboard"></a></i>
        <?php 
          if(!($catego == "u_n")){
        ?>
        <li class="active"><a href="users.php"><i class="fa fa-users" title="Usuários"></i></a></li>
        <?php 
          }else{
            echo "<li><a href='register.php'><i class='fa fa-clipboard' title='Cadastro' class='id'></i></a></li>";
          }
        ?>
        
        <li><a href="search.php"><i class="fa fa-search" title="Consultas" class="id"></i></a></li>
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
         <!--  <div class="profile_details_left">
            <ul class="nofitications-dropdown">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                <ul class="dropdown-menu">

                  <li>
                    <div class="notification_header">
                      <h3>You have 3 new notifications</h3>
                    </div> -->
                 <!--  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li> -->
                    <!-- <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all notifications</a>
                    </div>
                  </li>
                </ul>
              </li> -->
             <!--  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                    class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="notification_header">
                      <h3>You have 4 new messages</h3>
                    </div>
                  </li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li class="odd"><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>New customer registered </p>
                        <span>1 hour ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Lorem ipsum dolor sit amet </p>
                        <span>2 hours ago</span>
                      </div>
                    </a></li>
                  <li><a href="#" class="grid">
                      <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                      <div class="notification_desc">
                        <p>Johnson purchased template</p>
                        <span>Just Now</span>
                      </div>
                    </a></li>
                  <li> -->
                    <!-- <div class="notification_bottom">
                      <a href="#all" class="bg-primary">See all messages</a>
                    </div> -->
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
                <li class="breadcrumb-item"><a href="users.php">Usuários</a></li>
                <li class="breadcrumb-item" aria-current="page">Pesquisa de usuários</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->
        <?php 
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
        ?>

        <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Usuários Cadastrados</h3>
                  <form action="select_users.php" method="post">
                  <div class="card-tools">
                    <div class="input-group input-group-sm">  
                      <input type="text" class="form-control" placeholder="pesquise aqui o nome" name="text-search">
                        <!-- <div class="btn btn-primary p-0 ml-4"> -->
                         <button class="fa fa-search text-light border-0 bg-primary" style="border-radius:0px 5px 5px 0px;" name="btn-search"></button>
                      <!-- </div> -->
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                </form>

                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped table-bordered text-center">
                      <thead class="thead-default">
                        <tr>                                                  
                          <th class="">Nome</th>                                                 
                          <th class="">Categoria</th>                                                 
                          <th class="">Nº telefone</th>                                                 
                          <th class="">Email</th>                                                 
                          <!-- <th class="">Senha</th>  -->
                          <!-- <th class=""></th>           -->
                          <th class=""><button class="fa fa-check border-0 bg-transparent text-info" id="btn-check"></button></th>                              
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <form action="delete_data_users.php" method="post">
                          <?php  
                              include '../conect.php';
                              $search = $_POST['btn-search'];
                              $text = $_POST['text-search'];
                              if (isset($search)) {
                                $sql = "SELECT * FROM usuarios where Nome like '%$text%' AND Categoria = 'u_n' order by Id desc";
                                $query = $Conn->query($sql);
                                while ($linhas = $query->fetch_assoc()) {
                                   echo "<td>".$linhas['Nome']."</td>";
                                   $id = $linhas['Id'];
                                   if ($linhas['Categoria'] == "u_n") {
                                     echo "<td>Operador</td>";
                                   }else{}
                                   echo "<td>".$linhas['N_tel']."</td>";
                                   echo "<td>".$linhas['Email']."</td>";
                                  //  echo "<td><span class='fa fa-pencil'></span>&nbsp;<a href='?id=$id' data-toggle='modal' data-target='#Modalupdate' class='text-info'>Editar</a></td>";
                                   echo "<td><input type='checkbox' name='checkbox[]' class='check' value='$id' id='checkbox[]'></td></tr>";
                                }
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
      <input type="submit" class="btn btn-outline-primary mr-3" value="Deletar" name="deletar">
        </form> 
    
    <!-- //content block style 7 -->

  </div>
  <!-- //content -->
    <div class="container-fluid ml-4 p-0" style="padding: 0;">
      <a href="" data-toggle="modal" data-target="#Modalcadastro" class="btn btn-outline-primary"><span class="fa fa-plus"></span> Cadastrar usuário</a>
    </div>


</div>
</div>

<!-- Modal de cadastro -->
<div class="modal fade" id="Modalcadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="save_data_users.php" method="post">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nome completo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo" name="user_name">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Nº de Telefone</label>
                <input type="tel" id="exampleFormControlInput2" name="user_number" class="form-control" placeholder="999999999" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" maxlength="9">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput3">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput3" name="user_email" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Categoria</label>
                <select class="form-control col-6" id="exampleFormControlSelect1" name="user_function">
                  <option>Utilizador normal</option>
                  <option>Administrador</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput4">Palavra-passe</label>
                <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="palavra-passe" name="user_password">
                <button type="button" onclick="ver()" class="fa fa-eye btn" style="margin-top:5px;"></button>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">cadastrar</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal update -->
<?php 
  include '../conect.php';

  // $id_m = $_GET['id'];

  $nome = "";
  $cate = "";
  $tel = "";
  $email = "";

  $sql_data = "SELECT * FROM usuarios";
  $query = $Conn->query($sql_data);
  while($linhas_data = $query->fetch_assoc()){
    $id = $linhas['Id'];
    $nome = $linhas_data['Nome'];
    $cate = $linhas_data['Categoria'];
    $tel = $linhas_data['N_tel'];
    $email = $linhas_data['Email'];
  }
?>
<div class="modal fade" id="Modalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar dados de usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="update_users.php?id=<?= $id;?>" method="post">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nome completo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo" name="user_name" value="<?= $nome ?>">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Nº de Telefone</label>
                <input type="tel" id="exampleFormControlInput2" name="user_number" class="form-control" placeholder="999999999" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" maxlength="9" value="<?= $tel ?>">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput3">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput3" name="user_email" placeholder="name@example.com" value="<?= $email ?>">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Função</label>
                <select class="form-control col-6" id="exampleFormControlSelect1" name="user_function" style="width:50%;">
                  <option>Utilizador normal</option>
                  <option>Administrador</option>
                </select>
              </div>
              <!-- <div class="form-group">
                <label for="exampleFormControlInput4">Palavra-passe</label>
                <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="palavra-passe" name="user_password" value="<?= $senha ?>">
                <button type="button" onclick="ver()" class="fa fa-eye btn" style="margin-top:5px;"></button>
              </div> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!-- Fim Modal update -->


<!-- main content end-->
</section>

<!--footer section start-->
<footer class="dashboard">
  <p>&copy 2022 Todos os direitos reservados | Design by <span class="text-primary">Marcos Marques</span></p>
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

<script>
  var ctx = document.getElementsByClassName('line_chart1');
  var ctx2 = document.getElementsByClassName('line_chart2');

  var grafico = new Chart(ctx, {
    type:'line',
    data:{
      labels:['Jan','Fev','Mar','Abr','Maio','Jun','Jul','Ago','Set','Out','Nov','Dez'],
      datasets: [
        {
          label: "Número de carros lavados em um mês",
          data: [30,41,19,41,40,25,40,60,34,17,90,61],
          borderWidth: 4,
          borderColor: "rgba(255,67,89,.85)",
        }
      ]
    }
  })

  var grafico_semana = new Chart(ctx2, {
    type:'doughnut',
    data:{
      labels:['Segunda feira','Terça feira','Quarta feira','Quinta feira','Sexta feira'],
      datasets: [
        {
          label: "Número de carros lavados em 1 dia",
          data: [5,11,15,5,3,9,11],
          borderWidth: 4,
          borderColor: "#3D84D7",
          backgroundColor:'rgba(128,128,128,.2)',
        }
      ]
    }
  })

</script>

<script>
    function ver(){
        if(document.getElementById('exampleFormControlInput4').type == "password"){
          document.getElementById('exampleFormControlInput4').type = "text";
        } else{
          document.getElementById('exampleFormControlInput4').type = "password";
        }
    }
</script>

<!-- selecção de checkbox -->
<script>
  var btn = document.querySelector('#btn-check');
  var checkboxs = document.querySelectorAll('.check');

  btn.addEventListener('click', () => {
     for(var current of checkboxs){
        current.checked = !current.checked
     }
  })

</script>


</body>

</html>