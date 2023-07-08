<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Estatísticas</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <style>
    *{
      font-family: 'Poppins';
    }
  </style>

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
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
        <li class="active"><a href="people.html"><i class="fa fa-pie-chart" title="Estatísticas"></i></a></li>
        <li><a href="register.php"><i class="fa fa-clipboard" title="Cadastro" class="id"></i></a></li>
        <li><a href="search.php"><i class="fa fa-search" title="Consultas" class="id"></i></a></li>
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
                    <h5 class="user-name"><?php echo $_SESSION['nome']; ?></h5>
                    <span class="status ml-2">Activo</span>
                  </li>
                  <!-- <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li> -->
                  <!-- <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li> -->
                  <!-- <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li> -->
                  <!-- <li> <a href="#"><i class="fa fa-cog"></i>Definições de conta</a> </li> -->
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
                <li class="breadcrumb-item active" aria-current="page">Estatística</li>
            </ol>
        </nav>
        <!-- //breadcrumbs -->

        <div class="container-fluid bg-white p-3 mb-5" style="box-shadow: 2px 3px 5px #eeee;border-radius: 5px;">
          <div class="card-header align-items-center">
            <h3 class="text-primary" >Veículos lavados em um ano</h3>
          </div>
          <canvas class="line_chart1" width="10" height="3"></canvas>
        </div>

         <div class="container-fluid bg-white p-3 mb-5" style="box-shadow: 2px 3px 5px #eeee;border-radius: 5px;">
          <div class="card-header align-items-center">
            <h3 class="text-primary" >Veículos lavados em um mês</h3>
          </div>
          <canvas class="line_chart-mes" width="10" height="3"></canvas>
        </div>

        <div class="container-fluid bg-white p-3" style="box-shadow: 2px 3px 5px #eeee;border-radius: 5px;">
          <div class="card-header align-items-center">
            <h3 class="text-primary">Veículos lavados em uma semana</h3>
          </div>
          <canvas class="line_chart2" width="10" height="3"></canvas>
        </div>


    
    <!-- //content -->
</div>
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
  var ctx3 = document.getElementsByClassName('line_chart-mes');

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
    type:'line',
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

  var grafico_mes = new Chart(ctx3, {
    type:'line',
    data:{
      labels:['1ªSemana','2ªSemana','3ªSemana','4ªSemana',],
      datasets: [
        {
          label: "Número de carros lavados em cada semana",
          data: [8,5,6,10],
          borderWidth: 4,
          borderColor: "#B162AC",
          backgroundColor:'rgba(128,128,128,.2)',
        }
      ]
    }
  })
</script>


</body>

</html>