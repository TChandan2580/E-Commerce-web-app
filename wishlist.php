<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['user'])){
    header('location:index.php');
}else{
    $c_id = $_SESSION['user'];
    $p_id = $_POST['pid'];
    $insertwishlist = "INSERT INTO wistlist (pid, uid) VALUES ('$p_id','$c_id')";
    if(mysqli_query($conn, $insertwishlist)){
            header('Location:wishlistitem.php');
        // echo'inserted';

        $sql = "SELECT * FROM wistlist WHERE uid='$c_id'";
        $res = mysqli_query($conn,$sql);
        while($fetch = mysqli_fetch_assoc($res)){
          $uid = $fetch['uid'];
          $s2 = "SELECT * FROM wistlist WHERE pid='$p_id'";
          $r2 = mysqli_query($conn,$s2);
          $f2 = mysqli_fetch_assoc($r2);
        }
    }
}


?>