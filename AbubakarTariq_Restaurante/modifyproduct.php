<?php
require_once ("clases/pizza.php");

if(isset($_POST['quantityP'])){
    session_start();

    $productQuantity = $_POST['quantityP'];
    $productID = $_POST['productID'];


    $_SESSION['cart'][$productID]->setQuantity($productQuantity);

    
    header("Location:cart.php");
    
}elseif(isset($_POST['sizeP'])){
    
    session_start();
    $productSize = $_POST['sizeP'];
    $productID = $_POST['productId'];

    $_SESSION['cart'][$productID]->setSize($productSize);

    header("Location:cart.php");

}elseif(isset($_POST['deleteP'])){
    session_start();
    //session_destroy();
    unset($_SESSION['cart'][$_POST['deleteP']]);
    header("Location:cart.php");

}else{
    header("Location:cart.php");
}



?>