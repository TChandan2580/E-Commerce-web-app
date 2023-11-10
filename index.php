<?php include 'header.php'; ?>
<div class="container-fluid">
  <div class="row g-0">
    <div class="col-4">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          All departments
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <?php
          $ff = mysqli_query($conn,"SELECT * FROM category");
          while($ft = mysqli_fetch_assoc($ff)){
            ?>
            <li><a href=""><?php echo $ft['catname']; ?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="col-5">
      <div class="custom-form">
        <form class="" method="post" action="searchproduct.php">
          <select name="" id="" class="">
            <option value="">All categories</option>
          </select>
          <input class="" name="search" type="text" placeholder="Search" />
          <button class="" type="submit" name="searchsubmit">Search</button>
        </form>
      </div>
    </div>
    <div class="col-3">
      <div class="d-flex align-items-center gap-3">
        <div class="phone-logo-circle">
          <i class="fa fa-phone"></i>
        </div>
        <div class="">
          <p class="m-0 p-0 pline-height"><b>+917004711918</b></p>
          <p class="m-0 p-0 pline-height">support 24/7 times</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- header section end -->
<div class="banner d-flex justify-content-end ">
  <img src="./img/hero/banner.jpg" />
</div>
<div class="bannerposition">
  <p class="colour"><b>FRUIT FRESH</b></p>
  <h1>
    <b>Vegetable <br />
      100% Organic</b>
  </h1>
  <p>Free Pickup and Delivery Available</p>
<a href="vegetable.php"><button type="buttom" class="button btn btn-primary">SHOP NOW</button></a>
</div>


<div class="slick-slider-main container ">
  <div class="slider-indi ">
    <div class="carousel-inner ">
      <img src="./img/product/product-11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH </h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/featured/feature-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH BANANAS</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/product/product-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH GUAVAS</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/featured/feature-4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH WATERMELONS</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/featured/feature-5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH GRAPES</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/product/product-7.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH BURGERS</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/featured/feature-6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH BURGERS</h5>
      </div>
    </div>
  </div>
  <div class="slider-indi">
    <div class="carousel-inner">
      <img src="./img/featured/feature-7.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block item-name">
        <h5>FRESH MANGOS</h5>
      </div>
    </div>
  </div>
</div>
<div>
  <div class="prev">
    <p><i class="fa-solid fa-angle-right"></i></p>
  </div>
  <div class="next">
    <p><i class="fa-solid fa-angle-left"></i></p>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $('.slick-slider-main').slick({
    infinite: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
  });
</script>


<section class="product">
  <div class="container ">
    <div class="row g-0 py-2">
      <div class="col-12  text-center">
        <h1>FEATURED PRODUCT</h1>
      </div>
      <div class="d-flex justify-content-center ">
        <ul class="d-flex m-auto  my-2 my-lg-0">
          <li class=" nav-item color ">
            <a class="nav-link active" href="#">ALL</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">ORANGE</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">FRESH FRUITS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">VEGETABLES</a></>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">FASTFOOD</a>
          </li>

      </div>
      </ul>
    </div>
  </div>
   <div class="row g-3 cardbox">
    <?php 
    $ss = "SELECT * FROM product";
    $re = mysqli_query($conn,$ss);
    while($fe = mysqli_fetch_assoc($re)){
    ?>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="admin/product_images/<?php echo $fe['image']; ?>" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <form action="wishlist.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $fe['id']; ?>">
                <button type="submit" name="addtowishlist">
                  <i class="fa-sharp fa-solid fa-heart"></i>
                </button>
              </form>
            </div>
            <div class="icon-container">
              <form action="addtocart.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $fe['id']; ?>">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" name="addtocart">
                  <i class="fa-solid fa-cart-shopping"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <h6><?php echo $fe['name']; ?></h6>
      <P><?php echo $fe['price']; ?></P>
    </div>
    <?php 
    }
    ?>
    <!-- <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-3.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH GUAVAS</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-4.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>

        </div>
      </div>
      <h6>FRESH WATERMELONS</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-5.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH GRAPES</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-6.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH BURGERS</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-7.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH MANGOS</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-8.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH APPLES</h6>
      <P>30.00</P>
    </div>
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="./img/featured/feature-7.jpg" class="img-fluid" alt="">
          <div class="features">
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-heart"></i>
            </div>
            <div class="icon-container">
              <i class="fa-sharp fa-solid fa-repeat"></i>
            </div>
            <div class="icon-container">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <h6>FRESH MANGOS</h6>
      <P>30.00</P>
    </div>  -->
  </div>
  </div>
</section>

<div class="container fooditems">
  <div class=" row   classrow justify-content-center">
    <div class=" col-6">
      <a href="#" class="image">
        <img src="./img/banner/banner-1.jpg" class="img-fluid " alt="">
      </a>
    </div>
    <div class=" col-6 ">
      <a href="#" class="image">
        <img src="./img/banner/banner-2.jpg" class="img-fluid " alt="">
      </a>
    </div>
  </div>
</div>

<div class="container ">
  <div class="row g-5">
    <div class="col-4">
      <h3>Latest Products</h3>
      <div class="col-6 g-3">
        <div class="d-flex mb-3 ">
          <img src="./img/latest-product/lp-1.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> SPINCH</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3 ">
          <img src="./img/latest-product/lp-2.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0">CAPSIUM</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <img src="./img/product/details/thumb-4.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0">DRY FRUITS </p>
            <p><b>30.00</b></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <h3>Top Rated Products</h3>
      <div class="col-6">
        <div class="d-flex mb-3">
          <img src="./img/latest-product/lp-1.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> SPINCH</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <img src="./img/latest-product/lp-2.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> CAPSIUM</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <img src="./img/product/details/thumb-4.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> DRY FRUITS </p>
            <p><b>30.00</b></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <h3>Review Products</h3>
      <div class="col-6">
        <div class="d-flex mb-3">
          <img src="./img/latest-product/lp-1.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> SPINCH</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <img src="./img/latest-product/lp-2.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> CAPSIUM</p>
            <p><b>30.00</b></p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <img src="./img/product/details/thumb-4.jpg" alt="">
          <div class="m-2 p-2">
            <p class="m-0 p-0"> DRY FRUITS </p>
            <p><b>30.00</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- From The Blog -->
<div class="container">
  <div class=" blog d-flex justify-content-center">
    <h1> From the Blog</h1>
  </div>
  <div class="d-flex">
    <div class=" row py-4 g-3">
      <div class="col-4">
        <img src="./img/blog/blog-1.jpg" alt="">
        <div class="">
          <h6><B>Cooking tips make cooking simple</B></h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit blanditiis maiores distinctio </p>
        </div>
      </div>
      <div class="col-4">
        <img src="./img/blog/blog-2.jpg" alt="">
        <div class="">
          <h6><B>Cooking tips make cooking simple</B></h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit blanditiis maiores distinctio </p>
        </div>
      </div>
      <div class="col-4">
        <img src="./img/blog/blog-3.jpg" alt="">
        <div class="">
          <h6><B>Cooking tips make cooking simple</B></h6>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit blanditiis maiores distinctio </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>