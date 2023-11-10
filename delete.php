<?php
session_start(); 
include 'connection.php';


if(isset($_SESSION['user']) == false){
    header('Location:login.php');
}
$userid = $_SESSION['user'];

$prodid =0;
if(isset($_GET['prodid'])){
    $prodid = $_GET['prodid'];


}else{
    header('location:shoppingcart.php');

}


$sqlDeleteItems = "DELETE FROM cart where userid = '$userid' and prodid = '$prodid'";
$res = mysqli_query($conn,$sqlDeleteItems);

if($res){
    header('Location:shoppingcart.php');
}


?>