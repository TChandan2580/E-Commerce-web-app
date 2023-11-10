<?php 
include 'connection.php';
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    
    $sql = "INSERT INTO registration (firstname,lastname,email,mobile,password,gender,address,state,city)VALUES ('$fname','$lname','$email','$mobile','$password','$gender','$address','$state','$city')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('Location:login.php');
    }
    else{
        header('Location:register.php');
    }
     
}
?>