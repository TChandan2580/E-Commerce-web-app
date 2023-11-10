<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sms = $_POST['message'];
    $sql = "INSERT INTO contactus (name,email,sms) VALUES ('$name','$email','$sms')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('Location:contactus.php');
    }
    else{
        header('Location:contactus.php');
    }
     
}
?>