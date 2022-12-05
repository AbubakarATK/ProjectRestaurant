<?php
setcookie("lastOrder", "", time() - 86400);
if(!isset($_COOKIE['lastOrder'])) {
  session_start();
  //var_dump($_SESSION['cookieValue']);
  setcookie("lastOrder", $_SESSION['cookieValue'], time() + 86400 );
}


?>

<?php 
  include ("header.php");
  //include ("check-table.php");
?>

<section id="banner_principal" class="container-fluid " style="background-image: URL(assets/icons/bcart.jpg);">
        <div class="col-12 bannerc">
          
        </div>
</section>

<div class="container-lg" style="padding-top: 30px;">

  <div style=" margin: 0%; padding: 0%;">
    <h2 style="font-size: 45px; margin-bottom: 0%; padding-bottom: 0%;"><b>Your Order</b></h2>
  </div>

  
  <?php
    include("arrow/arrowsrightmenu.html");
    include("arrow/arrowsup.html");
  ?>
  
  <div class="container-lg" style="background-color: #E4D5C5; border-radius: 15px; ">


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%; text-align: center;" >

      <p style="font-size: 25px;"><b>Your Order have been Successfully.</b></p>

     <?php
      //var_dump($_SESSION['cart']);
      
     /*$orderFin = '';
     foreach($_SESSION['cart'] as $row){
      $orderFin .= '<p><b>Product Name: </b> '.$row->getName().', <b>Quantity: </b> '.$row->getQuantity().', <b>Size: </b> '.$row->getSize().', <b>Price: </b> '.$row->calculateSQ().'€, <b>Vegetarian: </b> '.$row->getVegetarian().'.</p>';

     }
     $orderFin .= '<p><b>Total Price: </b> '.$_SESSION['totalPrice'].'€</p>';

     
     $cookiesValue = $orderFin;
     //echo $orderFin;*/
     session_destroy();
     
     
     echo ($_COOKIE['lastOrder']);
     
     ?>

    </div> 
    
    
  </div>

 

</div>

<div style="float: left; width: 100%; ">
  <?php 
      include "footer.php";
  ?>
</div>

