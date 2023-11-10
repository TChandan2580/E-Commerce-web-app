<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sms = $_POST['sms'];
    
    
    $sql = "INSERT INTO contactus (name,email,sms)VALUES ('$name','$email','$message')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('Location:index.php');
    }
    else{
        header('Location:contactus.php');
    }
     
}
?>