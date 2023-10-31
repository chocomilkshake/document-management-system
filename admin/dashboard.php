<!DOCTYPE html>
<html lang="en">
<?php
include("include/count_document.php");
if (!isset($_SESSION["admin_user"])) {
  header("location:index.html");

} else {
  $uname = $_SESSION['admin_user'];
}
?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>File Management System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">

  <link href="css/dashboard.css" rel="stylesheet">
  <style>
    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    #loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('img/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
      opacity: 1;
    }

    #loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url('img/lg.flip-book-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
      opacity: 1;
    }
  </style>

  <script src="jquery.min.js"></script>
  <script type="text/javascript">
    $(window).on('load', function () {
      //you remove this timeout
      setTimeout(function () {
        $('#loader').fadeOut('slow');
      });
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
    });
  </script>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#">
          <strong class="blue-text"></strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <!--   <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">About
                MDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">Free
                download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#">Free
                tutorials</a>
            </li> -->
          </ul>
          <?php

          require_once("include/connection.php");


          $id = mysqli_real_escape_string($conn, $_SESSION['admin_user']);


          $r = mysqli_query($conn, "SELECT * FROM admin_login where id = '$id'") or die(mysqli_error($con));

          $row = mysqli_fetch_array($r);

          $id = $fname = $row['name'];
          // $lname=$row['lname'];
          
          ?>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li style="margin-top: 10px;">Welcome!,</font>
              <?php echo ucwords(htmlentities($id)); ?>&nbsp;&nbsp;
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link border border-light rounded waves-effect">
                <i class="far fa-user-circle"></i>SignOut
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->
    <div id="loader"></div>
    <!-- Sidebar -->
    <?php include("include/sidebar.php"); ?>
    <!-- Sidebar -->

  </header>

  <!-- Add Admin Module -->

  <?php include("include/add_admin.php") ?>

  <!-- End Add Admin Module-->

  <!--Add user Module-->
  <?php include("include/add_user.php") ?>
  <!--End Add user Module-->



  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="dashboard.php">Home Page</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>
          <!-- 
          <form class="d-flex justify-content-center">
       
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form> -->

        </div>

      </div>
      <!-- Heading -->

      <!-- dashboard contain -->
      
      <?php include("include/dashboard_contain.php"); ?>
      
      <!--end of dashboard contain-->


      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Initializations -->
      <script type="text/javascript">
        // Animations initialization
        new WOW().init();

      </script>

      <!-- Charts -->
      <script>
        // Line
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: <?php echo json_encode($name); ?>,
            datasets: [{
              backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360", "#6ae27e", "#dc69e2", "#687be2", "#e28868", "#6c68e2", "#ab68e2", "#e268b7"],
              // hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],
              data: <?php echo json_encode($counts); ?>,
            }]
          },
          options: {
            legend: {
              display: false
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]

            }
          }
        });



        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
          type: 'pie',
          data: {
            labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
            datasets: [{
              data: [300, 50, 100, 40, 120],
              backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
              hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }]
          },
          options: {
            responsive: true,
            legend: false
          }
        });




      </script>
</body>

</html>