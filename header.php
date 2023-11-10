<?php
include 'connection.php';
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./contactus.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./regitration.css">
    <link rel="stylesheet" href="shopdetails.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <div>
        <div class="topbar d-flex align-items-center justify-content-between bg-light py-2 px-5">
            <div class="d-flex align-items-center">
                <a class="text-decoration-none" href="mailto:random@gmail.com">random@gmail.com</a>
                <span class="px-4">|</span>
                <a class="text-decoration-none" href="">Free Shipping for all order of 99</a>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-4">
                <div><i class="fa-brands fa-facebook"></i></div>
                <div><i class="fa-brands fa-twitter"></i></div>
                <div> <a href="linkedin.com"> <i class="fa-brands fa-linkedin"></i></a></div>
                <div><i class="fa-brands fa-pinterest-p"></i></div>
                <span class="mx-1">|</span>
                <div>
                    <?php if (isset($_SESSION['user']) == "") {
                    ?>
                        <a href="login.php"><i class="fa-solid fa-user"></i></a>
                    <?php
                    } else {
                        $id = $_SESSION['user'];
                        $sql = "SELECT * FROM users WHERE id='$id'";
                        $que = mysqli_query($conn, $sql);
                        $res = mysqli_fetch_assoc($que);
                    ?>
                        <a href="account.php"><i class="fa-solid fa-user"></i><?php echo $res['firstname'];?></a>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">ORGANIC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shoppingcart.php">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CATEGORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">CONTACT</a>
                    </li>
                </ul>
                <div class="list d-flex justify-content-center gap-4">
                    <div><a href="wishlist.php"><i class="fa-sharp fa-solid fa-heart"></i></div>
                    <div><a href="shoppingcart.php"><i class="fa-solid fa-briefcase"></i></a></div>
                    <div class="para">
                        <p>item:<b>1500.00</b></p>
                    </div>
    </nav>
    </div>
    <!-- navbar end -->