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

  <title>Área de Cadastro</title>
  <style>
    *{
      font-family: 'Poppins';
    }
  </style>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

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
        <li><a href="users.php"><i class="fa fa-users" title="Usuários"></i></a></li>
        <?php 
          }else{
            echo "<li class='active'><a href='register.php'><i class='fa fa-clipboard' title='Cadastro' class='id'></i></a></li>";
          }
        ?>
        <!-- <li class="active"><a href="register.php"><i class="fa fa-clipboard" title="Cadastro" class="id"></i></a></li> -->
        <li><a href="search.php"><i class="fa fa-search" title="Consultas" class="id"></i></a></li>
        <!-- <li><a href="#"><i class="fa fa-file-text-o" title="Registro de actividades"></i></a></li> -->
      </ul>
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
        <li class="breadcrumb-item active" aria-current="page">Cadastramento de veículos</li>
      </ol>                   
    </nav>

      <?php  
          if (isset($_SESSION['msg'])) {
             echo $_SESSION['msg']; unset($_SESSION['msg']);
        }
      ?>
    <!-- //breadcrumbs -->

    <!-- pricing -->
    <section class="pricing">
      <div class="card card_border mb-5">
        <div class="cards__heading">
          <h3>Cadastrar Veículo</h3>
        </div>
          <div class="container-fluid">
            <form action="save_data.php" method="post" class="d-flex form-cad">
             
              <div class="form-group">
                <label for="exampleFormCont­rolInput1">Marca do veículo</label>
                <input type="text" class="form-control"­ id="exampleFormContr­olInput1" name="input-marca" placeholder="Marca" required> 
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolInput2">Modelo do veículo</label>
                <input type="text" class="form-control"­ id="exampleFormContr­olInput2" name="input-modelo" placeholder="Modelo" required>
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolInput3">Matrícula</label>
                <input type="text" class="form-control"­ id="exampleFormContr­olInput3" name="input-matricula" placeholder="xx-xx-xx-xx" maxlength="11" required> 
              </div> 

              <div class="form-group">
                <label for="exampleFormCont­rolInput4">Cilindragem</label>
                <input type="num" class="form-control"­ id="exampleFormContr­olInput4" name="input-cilindragem" placeholder="0,00" required> 
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolSelect2">Tipo de veículo</label>
                <select class="form-control col-6"­ id="exampleFormContr­olSelect2" name="select_veiculo">
                <option>Moto</option>
                <option>Carro</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolInput4">Nome do proprietário</label>
                <input type="text" class="form-control"­ id="exampleFormContr­olInput5" name="input-prop" placeholder="Nome" required> 
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolInput4">Número de Telefone</label>
                <input type="tel" id="exampleFormControlInput6" name="client_number" class="form-control" placeholder="999999999" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" maxlength="9" required> 
              </div>

              <div class="form-group">
                <label for="exampleFormCont­rolInput4">Email</label>
                <input type="email" class="form-control"­ id="exampleFormContr­olInput7" name="input_client_email" placeholder="me@example.com" required> 
              </div> 

              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar" formtarget="_blank">
              </div>
            </form>
          </div>
        <!-- <div class="content-form">
              <form action="#">
                <div>
                    <label for="">Marca do veículo:</label><br><input type="text">
                </div>

                <div>
                    <label for="">Modelo do veículo:</label><br><input type="text">
                </div>

              
                <div>
                    <label for="">Selectione o tipo de veículo:</label><br>
                      <select name="" id="">
                        <option value="">Carro</option>
                        <option value="">Moto</option>
                    </select>
                </div>
              </form>
            </div> -->
          <!-- pricing version 1 -->

          <!--//BLOCK ROW END-->

        <!--   <section class="w3l-pricing1">
            <div class="row px-2">
              <div class="col-md-4 px-2">
                <div class="mb-4 price-card price-card1 p-lg-4 p-md-3 p-4">
                  <div class="card-header p-0 card-heading">
                    <h4 class="mb-4">Free</h4>
                  </div>
                  <div class="card-body p-0">
                    <h1 class="card-title pricing-card-title my-price-title">$0<small class="text-dull">/month</small>
                    </h1>
                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                    <ul class="list-unstyled list-pricing mt-3 mb-4">
                      <li>1 Domain</li>
                      <li>10 users included</li>
                      <li>2 GB of storage</li>
                      <li>Email support</li>
                      <li>Help center access</li>
                    </ul>
                    <div class="mt-4">
                      <a href="signup.html" class="btn btn-lg btn-outline-primary btn-style border-btn">Sign up for
                        free</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 px-2">
                <div class="mb-4 price-card price-card2 p-lg-4 p-md-3 p-4 recomemded-price">
                  <div class="card-header p-0 card-heading">
                    <h4 class="mb-4">Regular <span class="label label-popular">Popular</span></h4>
                  </div>
                  <div class="card-body p-0">
                    <h1 class="card-title pricing-card-title my-price-title">$49<small class="text-dull">/month</small>
                    </h1>
                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                    <ul class="list-unstyled list-pricing mt-3 mb-4">
                      <li>10 Domain</li>
                      <li>20 users included</li>
                      <li>10 GB of storage</li>
                      <li>Priority email support</li>
                      <li>Help center access</li>
                    </ul>
                    <div class="mt-4">
                      <a href="#" class="btn btn-lg btn-primary btn-style">Get started</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 px-2">
                <div class="mb-4 price-card price-card3 p-lg-4 p-md-3 p-4">
                  <div class="card-header p-0 card-heading">
                    <h4 class="mb-4">Premium</h4>
                  </div>
                  <div class="card-body p-0">
                    <h1 class="card-title pricing-card-title my-price-title">$199<small class="text-dull">/month</small>
                    </h1>
                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                    <ul class="list-unstyled list-pricing mt-3 mb-4">
                      <li>30 Domain</li>
                      <li>30 users included</li>
                      <li>15 GB of storage</li>
                      <li>Phone and email support</li>
                      <li>Help center access</li>
                    </ul>
                    <div class="mt-4">
                      <a href="#" class="btn btn-lg btn-outline-primary btn-style border-btn">Contact us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section> -->
        <!-- Button trigger modal -->

<!-- Modal-logs -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registro de Actividades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi eum architecto obcaecati eligendi omnis, atque ratione, a alias, reiciendis dolores corporis et debitis in quia aut quisquam nemo explicabo incidunt.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laboriosam odit voluptates culpa ducimus, eveniet obcaecati ad recusandae, a dignissimos soluta expedita qui pariatur nulla. Ea quam est ut similique.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, reiciendis nihil animi esse dolorum numquam tenetur earum eveniet iste et incidunt ullam dolores natus velit porro perspiciatis maiores enim molestias?
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate blanditiis tempore ipsum enim quisquam excepturi illum facere iure rerum? Facilis, totam non impedit provident illum nulla architecto deleniti vitae ratione.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>

    <!--BLOCK ROW START-->

    <!-- //pricing version 1 -->

    <!-- pricing version 2 -->
    <!-- <div class="pricing-version-2">
      <div class="card card_border mb-5">
        <div class="cards__heading">
          <h3>Pricing Tables -<span> Version 2</span></h3>
        </div>
        <div class="card-body">
          <div class="row px-2"> -->

            <!-- Table #1  -->
           <!--  <div class="col-lg-4 col-md-6 px-2 mb-4">
              <div class="card text-center card__hover">
                <div class="card-header">
                  <h3 class="display-4"><span class="currency">$</span>19<span class="period">/month</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">
                    Basic Plan
                  </h4>
                  <ul class="list-group">
                    <li class="list-group-item">1 Domain</li>
                    <li class="list-group-item">Ultimate Features</li>
                    <li class="list-group-item">Responsive Ready</li>
                    <li class="list-group-item">Editor Ready Builder</li>
                    <li class="list-group-item">Limited UI Blocks</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn btn-style btn-primary mt-4">Choose Plan</a>
                </div>
              </div>
            </div>
 -->
            <!-- Table #2  -->
            <!-- <div class="col-lg-4 col-md-6 px-2 mb-4">
              <div class="card text-center card__hover">
                <div class="card-header">
                  <h3 class="display-4"><span class="currency">$</span>29<span class="period">/month</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">
                    Regular Plan
                  </h4>
                  <ul class="list-group">
                    <li class="list-group-item">10 Domain</li>
                    <li class="list-group-item">Ultimate Features</li>
                    <li class="list-group-item">Responsive Ready</li>
                    <li class="list-group-item">Editor Ready Builder</li>
                    <li class="list-group-item">Unlimited UI Blocks</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn btn-style btn-primary mt-4">Choose Plan</a>
                </div>
              </div>
            </div> -->

            <!-- Table #3  -->
           <!--  <div class="col-lg-4 col-md-6 px-2 mb-4">
              <div class="card text-center card__hover">
                <div class="card-header">
                  <h3 class="display-4"><span class="currency">$</span>39<span class="period">/month</span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">
                    Premium Plan
                  </h4>
                  <ul class="list-group">
                    <li class="list-group-item">15 Domain</li>
                    <li class="list-group-item">Ultimate Features</li>
                    <li class="list-group-item">Responsive Ready</li>
                    <li class="list-group-item">Editor Ready Builder</li>
                    <li class="list-group-item">Unlimited UI Blocks</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn btn-style btn-primary mt-4">Choose Plan</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->
    <!-- //pricing version 2 -->
    </section>
    <!-- //pricing -->

  </div>
  <!-- //content -->

</div>
<!-- main content end-->
</section>
<!--footer section start-->
<footer class="dashboard">
  <p>&copy 2022 Todos os direitos reservados | Design por <span class="text-primary">Marcos Marques</span></p>
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

<!-- <script>
  
    

    let get = document.querySelector('.fadeOut')


  // console.log(get);

      setTimeout(()=>{ 
      console.log('teste');
      // get.style.display = "none";
      get.style.transition = '.5s';
      get.style.opacity = 0;
      get.style.display = none;
  },3000)


</script> -->

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