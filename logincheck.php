<?php 
include 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
     $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
     $res = mysqli_query($conn,$sql);
     $row = mysqli_num_rows($res);
     if($row > 0){
         $fetch = mysqli_fetch_assoc($res);
         $id = $fetch['id'];
         $_SESSION['user'] = $id;
        header('location:index.php');
     }
     else{
        header('Location:login.php');
     }
}
?>
