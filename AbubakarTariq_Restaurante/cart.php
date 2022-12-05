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


    <div style="padding: 1%;  margin-top: 0%; padding-bottom: 3%" >

      <section id="pasteles" class="container mt-2 ">
            
            <?php
              require_once ("clases/createpizza.php");
              $finalorder = '';
              $totalPriceL = array();
              $totalPrice = 0;
              //session_destroy();
              if(isset($_SESSION['cart'])){
      

                $_SESSION['cart'] = array_values($_SESSION['cart']);
                //var_dump($_SESSION['cart']);
                $arrayPosition = 0;
                foreach($_SESSION['cart'] as $row){

                  $finalorder .= '<div class="row">';
                  $finalorder .= '<div class=" col-12 mt-3 ">';
                  $finalorder .= '<h3 style="font-size: 33px;"><b>'.$row->getName().'</b></h3>';
                  $finalorder .= '<div>';
                  $finalorder .= '<img src="assets/icons/'.$row->getPicture().'" alt="Card image cap"  class="cartimg">';
                  $finalorder .= '<form action="modifyproduct.php" method="post">';
                  $finalorder .= '<select onchange="this.form.submit()" class="form-select mt-4 cartselect" name="quantityP" >'; 
                  $finalorder .= '<option selected>'.$row->getQuantity().' Pizza</option>';
                  $finalorder .= '<option value="One">One Pizza</option>';
                  $finalorder .= '<option value="Two">Two Pizza</option>';
                  $finalorder .= '<option value="Three">Three Pizza</option>';
                  $finalorder .= '</select>';
                  $finalorder .= '<input type="hidden" value="'.$arrayPosition.'" name="productID">';
                  $finalorder .= '</form>';
                  $finalorder .= '<form action="modifyproduct.php" method="post">';
                  $finalorder .= '<input type="hidden" value="'.$arrayPosition.'" name="productId">';
                  $finalorder .= '<select onchange="this.form.submit()" class="form-select mt-4 cartselect1" name="sizeP">';
                  $finalorder .= '<option selected>'.$row->getSize().' Pizza</option>';
                  $finalorder .= '<option value="Small">Small Pizza</option>';
                  $finalorder .= '<option value="Medium">Medium Pizza</option>';
                  $finalorder .= '<option value="Large">Large Pizza</option>';
                  $finalorder .= '</select>';
                  $finalorder .= '<input type="text" class="form-control mt-4 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="'.$row->calculateSQ().'€">'; 
                  $finalorder .= '</form>';
                  $finalorder .= '<form action="modifyproduct.php" method="post">';
                  $finalorder .= '<input type="hidden" value="'.$arrayPosition.'" name="deleteP">';
                  $finalorder .= '<input type="image" style="cursor: pointer;" src="assets/icons/delete.png" alt="Submit"  class="mt-4 cartimg1">';
                  $finalorder .= '</form>';
                  $finalorder .= '</div>';
                  $finalorder .= '</div>';
                  $finalorder .= '</div>';

                  array_push($totalPriceL,$row->calculateSQ());

                  $arrayPosition++;
  
                }

                if(count($_SESSION['cart']) == 0){
                  $finalorder = '<p style="font-size: 25px;"><b>You dont have any product selected.</b></p>';
                }

                $totalPrice = Pizza::calculatePrice($totalPriceL);
                $_SESSION['totalPrice'] = $totalPrice;
              }else{
                $finalorder = '<p style="font-size: 25px;"><b>You dont have any product selected.</b></p>';
              }

              echo $finalorder;


              $orderFin = '';
              if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $row){
                  $orderFin .= '<p><b>Product Name: </b> '.$row->getName().', <b>Quantity: </b> '.$row->getQuantity().', <b>Size: </b> '.$row->getSize().', <b>Price: </b> '.$row->calculateSQ().'€, <b>Vegetarian: </b> '.$row->getVegetarian().'.</p>';
  
                }
                $orderFin .= '<p><b>Total Price: </b> '.$_SESSION['totalPrice'].'€</p>';
              }
              

              
              $_SESSION['cookieValue'] = $orderFin;
              

            ?>
            <!--
            <div class="row">
              <div class=" col-12 mt-3 ">
                <h3 style="font-size: 33px;"><b>Beef Pizza</b></h3>
                <div>
                  <img src="assets/icons/2pizza2.png" alt="Card image cap"  class="cartimg">
                  <select class="form-select mt-4 cartselect" aria-label="Default select example" >
                    <option selected>Select Quantity</option>
                    <option value="1">One Pizza</option>
                    <option value="2">Two Pizza</option>
                    <option value="3">Three Pizza</option>
                  </select>
                  <select class="form-select mt-4 cartselect1" aria-label="Default select example">
                    <option selected>Select Size</option>
                    <option value="1">Small Pizza</option>
                    <option value="2">Medium Pizza</option>
                    <option value="3">Large Pizza</option>
                  </select>
                  <input type="text" class="form-control mt-4 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="52232€">
                  <img src="assets/icons/delete.png" class="mt-4 cartimg1" alt="Card image cap" >
                </div>
              </div>
            </div>
            -->
            
            <div  class="row" style="margin-top: 5%;" >
                <div class=" col-11 mt-3" >
                  <div style="float: left; margin-left: 30%; margin-right: 1.5%; " >
                    <h3 style="font-size: 33px;"  class="mt-3"><b>Total Price:</b></h3>
                  </div>
                  <div >
                    <input type="text" class="form-control mt-3 cartselect2" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly value="<?php echo $totalPrice; ?>€">
                  </div>
                </div>
            </div>

            

            <div  class="row" style=" text-align: center; padding-left: 35%; margin-top: 2%;">
                <div class=" col-12 mt-3" >
                  <div style="float: left; margin-bottom: 5%;">
                    <button class="btn btn-dark" onclick="location.href='menu.php'"><b>Add More Product</b></button>
                  </div>
                  <div style="float: left; margin-left: 5%;" >
                    <button class="btn btn-dark" onclick="location.href='orderFinished.php'" ><b>Buy Now</b></button>
                  </div>
                </div>
            </div>

      </section>

    </div> 
    
  </div>

 

</div>

<div style="float: left; width: 100%; ">
  <?php 
      include "footer.php";
  ?>
</div>

