<?php
  //require_once("check-table.php");
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//ES">
<html>
<head>
  <title>CrackPizza</title>
  <meta charset="UTF-8">
  <meta name="description" content="Descripció web">
  <meta name="keywords" content="Paraules clau">
  <meta name="author" content="Autor">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="assets/icons/logofa.png">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style21.css" rel="stylesheet" type="text/css" media="screen">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
  
<body>

<header>
    <nav class="navbar navbar-expand-lg headerC fixed-top">
      <div class="container-lg ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <a class="navbar-brand text-color1 logomm" href="#"><img src="assets/icons/logob.png" height="92px" alt="CrackPizza" ></a>
          <div class="pizzaman d-none d-lg-block"></div>
        <div id="botones_tienda_smartphone" >
          <a href="#" ><img class="usericonm" style="width: 30px; height: 38px;"></a>
          <a href="cart.php" ><img class="carticonm" style="width: 30px; height: 38px;" ></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  buttoncrack"  aria-current="page" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  buttoncrack" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  buttoncrack" href="#">Contact Us</a>
              </li>
          </ul>
          <div id="botones_tienda_escritorio" class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  usericon" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link   carticon" href="cart.php"><img ></a>
              </li>
            </ul>      
          </div>
        </div>
      </div>
    </nav>
    
</header>

