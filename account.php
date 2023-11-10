<?php 
session_start();
if (isset($_SESSION['user']) == "") {
    header('Location:login.php');
}
include 'connection.php';
$id = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn,$sql);
$fetch = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    Account id:<?php echo $fetch['id']; ?><br>
    Name:<?php echo $fetch['firstname']; ?><br>
    Email:<?php echo $fetch['email']; ?><br>
    Password:<?php echo $fetch['password']; ?><br>
    <a href="logout.php">Logout</a>
</body>
</html>