<?php
session_start(); 
include 'connection.php';
if(isset($_SESSION['user']) == false){
    header('Location:login.php');
}
else{
    $id = $_SESSION['user'];
$prodid = $_POST['pid'];
$quantity = $_POST['quantity'];
//$img= $_POST['image'];

//echo $id;

$sqlToGetQuanity = "SELECT quantity from cart where userid = '$id' and prodid = '$prodid'";
//echo $sqlToGetQuanity;
$resToGetQuanity = mysqli_query($conn, $sqlToGetQuanity);

//echo $resToGetQuanity;

$fetch= mysqli_fetch_assoc($resToGetQuanity);
$QuanityCount = $fetch['quantity'];

if($QuanityCount > 0){
    


$totalQunaity = $QuanityCount + $quantity;

$sqlUpdateQuantity = "UPDATE cart SET quantity = $totalQunaity where userid = '$id' and prodid = '$prodid'";

$resUpdateQuantity = mysqli_query($conn, $sqlUpdateQuantity);

if($resUpdateQuantity){
    header('Location:shoppingcart.php');
}
else{
    header('Location:index.php');
}

}else{

    $sql = "INSERT INTO cart (userid,prodid,quantity) VALUES ('$id','$prodid','$quantity')";
$res = mysqli_query($conn,$sql);
if($res){
    header('Location:shoppingcart.php');
}
else{
    header('Location:index.php');
}

}



}
?>
