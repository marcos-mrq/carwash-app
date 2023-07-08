<?php session_start();?>

 <?php  
    include '../conect.php';
    $sql = "SELECT * FROM veiculo";
    $query = $Conn->query($sql);
    $countVeiculo = mysqli_num_rows($query);

    $sql_users = "SELECT * FROM usuarios";
    $query_users = $Conn->query($sql_users);
    $user_num = mysqli_num_rows($query_users);

    // $sql_f = "SELECT * FROM veiculo WHERE Marca_veiculo = 'Fiat' ";
    // $query_f = $Conn->query($sql_f);
    // $countVeiculoF = mysqli_num_rows($query_f);

    // $sql_ch = "SELECT * FROM veiculo WHERE Marca_veiculo = 'Chevrolet' ";
    // $query_ch = $Conn->query($sql_ch);
    // $countVeiculoCh = mysqli_num_rows($query_ch); 

?>
<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de Controlo</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="Carwash/font-awesome-4.7.0/*.css">
  <script src="../sweetalert2/package/dist/sweetalert2.all.min.js"></script>
  <script src="../sweetalert2/package/dist/sweetalert2.min.css"></script>
  <style>
    *{
      font-family: 'Poppins';
    }
  </style>
  <!-- google fonts -->
  <!-- <link href="//fonts.googleapis.com/css?family=Arial:300,400,600,700,800,900&display=swap" rel="stylesheet"> -->
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.php">Collective</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo -- -->
    <!-- <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div> -->
     <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="index.php" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
     <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href="index.php"><i class="fa fa-tachometer" title="Dashboard"></a></i>
        <!-- <li><a href="users.php"><i class="fa fa-users" title="Usuários"></i></a></li> -->
        <li><a href="register.php"><i class="fa fa-clipboard" title="Cadastro" class="id"></i></a></li>
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
          </form></div> -->
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
                    <h5 class="user-name"><?php echo $_SESSION['nome']; ?></h5>
                    <span class="status ml-2">OPerador</span><br>
                    <span class="status ml-2">Activo</span>
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

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Seja Bem-vindo ao Sistema <span class="text-primary">CarWash</span></h1>
      <!-- <p>Very detailed & featured admin.</p> -->
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4" id="car">
                <i class="fa fa-user" id="f-car"></i>
                <h3 class="text-primary number">
                  <?php
                    include '../../date.php';
                    echo "$user_num usuário(s)";   
                  ?>
                  </h3>
                <p class="stat-text">usuário cadastrados</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4" id="list">
                <i class="fa fa-list-alt" id="f-list-alt"></i>
                <h3 class="text-secondary number"> 
                  <?php 
                    echo "$countVeiculo carro(s)";
                  ?></h3>
                <p class="stat-text">Carros cadastrados</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4" id="cont">
                <i class="fa fa-money" id="f-money"></i>
                <h3 class="text-success number">
                  <?php  
                    include '../conect.php';
                    include '../../date.php';
                    $sql = "SELECT * FROM veiculo";
                    $valor_hours = 0;
                    $query = $Conn->query($sql);
                    while ($linhas = $query->fetch_assoc()) {
                      $valor_hours += $linhas['Preco'];
                      $time = date("dd/mm/Y H:i:s");
                      
                    }
                    echo number_format($valor_hours,2,",",".");
                  ?>Kz</h3>
                <p class="stat-text">Valor arrecadado em 24h</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4" id="ca">
                <i class="fa fa-bank" id="f-ca"></i>
                <h3 class="text-danger number"> <?php  
                    include '../conect.php';
                    $sql = "SELECT * FROM veiculo";
                    $valor = 0;
                    $query = $Conn->query($sql);
                    while ($linhas = $query->fetch_assoc()) {
                      $valor += $linhas['Preco'];
                    }
                    echo number_format($valor,2,",",".");
                  ?>Kz</h3>
                <p class="stat-text">Total valor arrecadado</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- charts -->
    <div class="chart">
      <div class="row">
        <div class="col-lg-6 pr-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Total de marcas
            </div>
            <div class="card-body">
              <!-- bar chart -->
              <div id="container">
                <canvas id="piecharts"></canvas>
              </div>
              <!-- bar chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Actualizado a 24 horas atrás
            </div>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-2 chart-grid">
          <div class="card text-center card_border">
            <div class="card-header chart-grid__header">
              Gráficos em 1 ano
            </div>
            <div class="card-body">
              <!-- line chart -->
              <div id="container">
                <canvas id="linecharts"></canvas>
              </div>
              <!-- //line chart -->
            </div>
            <div class="card-footer text-muted chart-grid__footer">
              Actualizado a 24 horas atrás
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
    $sq = "SELECT DISTINCT(Marca_veiculo) FROM veiculo";
    $quer = $Conn->query($sq);
    $array = [];
    $n = 0;

    foreach ($quer as $data) {
      $mar[$n] = $data['Marca_veiculo'];

      $sel = $Conn->query("SELECT * FROM veiculo WHERE Marca_veiculo = '$mar[$n]'");

      $count = mysqli_num_rows($sel);

      // echo $count;

      $array[$n] = $count;

      $n++;

    }

    // print_r($array);

    include '../conect.php';

    $sql_jan = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 01";
    $sql__jan = $Conn->query($sql_jan);
    $jan = mysqli_num_rows($sql__jan);

    $ano_corrente = date('Y');

    $sql_f = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 02 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__f = $Conn->query($sql_f);
    $fev = mysqli_num_rows($sql__f);

    $sql_mar = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 03 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__mar = $Conn->query($sql_mar);
    $marco = mysqli_num_rows($sql__mar);

    $sql_ab = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 04 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__ab = $Conn->query($sql_ab);
    $abr = mysqli_num_rows($sql__ab);

    $sql_m = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 05 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__m = $Conn->query($sql_m);
    $mai = mysqli_num_rows($sql__m);

    $sql_jun = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 06 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__jun = $Conn->query($sql_jun);
    $jun = mysqli_num_rows($sql__jun);

    $sql_jul = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 07 AND YEAR(Data_registro) = '$ano_corrente' ";
    $sql__jul = $Conn->query($sql_jul);
    $jul = mysqli_num_rows($sql__jul);

    $sql_ag = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 08 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__ag = $Conn->query($sql_ag);
    $ago = mysqli_num_rows($sql__ag);

    $sql_set = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 09 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__set = $Conn->query($sql_set);
    $set = mysqli_num_rows($sql__set);

    $sql_out = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 10 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__out = $Conn->query($sql_out);
    $out = mysqli_num_rows($sql__out);

    $sql_nov = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 11 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__nov = $Conn->query($sql_nov);
    $nov = mysqli_num_rows($sql__nov);

    $sql_dez = "SELECT * FROM veiculo WHERE MONTH(Data_registro) = 12 AND YEAR(Data_registro) = '$ano_corrente'";
    $sql__dez = $Conn->query($sql_dez);
    $dez = mysqli_num_rows($sql__dez);

    ?>

  </div>
  <!-- //content -->
</div>
<!-- main content end-->
</section>
  <!--footer section start-->
<footer class="dashboard">
  <p>&copy 2022 Todos os direitos reservados | Design by <a href="#" target="_blank"
      class="text-primary">Marcos Marques</a></p>
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

<script>
  var ctx = document.getElementById('piecharts');
  let labels = <?php echo json_encode($mar) ?>;
  let valor = <?php echo json_encode($array) ?>;

  let array_js = [];

  for(let i = 0; i <= valor.length; i++){

    let red = Math.floor(Math.random() * 255);
    let green = Math.floor(Math.random() * 255);
    let blue = Math.floor(Math.random() * 255);

    array_js.push('rgba('+red+','+green+','+blue+',.89)');

  }

  var grafico = new Chart(ctx, {
    type:'doughnut',
    data:{
      labels: labels,
      datasets: [
        {
          data: valor,
          borderWidth: 4,
          backgroundColor: array_js,
          tension: 0.1
        }
      ]
    }
  }) 
</script>

<script>
  var ctx1 = document.getElementById('linecharts');

  var grafico_line = new Chart(ctx1, {
    type:'line',
    data:{
      labels:['Jan','Fev','Mar','Abr','Maio','Jun','Jul','Ago','Set','Out','Nov','Dez'],
      datasets: [
        {
          label: "Carros lavados",
          data: [<?= $jan ?>, <?= $fev ?>, <?= $marco ?>, <?= $abr ?>, <?= $mai ?>, <?= $jun ?>, <?= $jul ?>, <?= $ago ?>, <?= $set ?>, <?= $out ?>, <?= $nov ?>, <?= $dez ?>],
          borderWidth: 4,
          borderColor: "#b162ac"
        }
      ]
    },

    option:{
      title:{
        display: true,
        fontSize: 20,
        text:"Relatório diário"
      }
    }




  })
</script>

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
  