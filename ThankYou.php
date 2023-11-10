<?php

include 'header.php';

session_start();

if(isset($_SESSION['user']) == false){
    header('Location:login.php');
}
$userid = $_SESSION['user'];


$quantity =0;
if(isset($_GET['quantity'])){
    $quantity = $_GET['quantity'];
}


if($quantity <1 ){
    header('location:shoppingcart.php');
}else{
?>

<H2> Thank you for shopping with ORGANIC FOOD . </H2>
<br>
<h3> You have ordered total items = <?php echo $quantity ?> </h3>

<h3> click here to countinue shopping </h3>



<?php
}
?>