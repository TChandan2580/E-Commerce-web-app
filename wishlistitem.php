<?php
session_start(); 
include 'connection.php';
if(isset($_SESSION['user']) == false){
    header('Location:login.php');
}
else{
    $id = $_SESSION['user'];
$proid = $_POST['pid'];
$quantity = $_POST['quantity'];
$img= $_POST['image'];
$sql = "INSERT INTO cart (userid,prodid,quantity,image) VALUES ('$id','$proid','$quantity','$img')";
$res = mysqli_query($conn,$sql);
if($res){
    header('Location:wis.php');
}
else{
    header('Location:index.php');
}
}
?>