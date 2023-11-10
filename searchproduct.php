<?php 
include 'connection.php';
if(isset($_POST['searchsubmit'])){
    $search = $_POST['search'];
    $sql = "SELECT * FROM product WHERE name LIKE '%".$search."%'";
    $res = mysqli_query($conn,$sql);
    while($fetch = mysqli_fetch_assoc($res)){
        echo $fetch['name']."<br>";
    }
}
?>