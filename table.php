<?php
    $product = "SELECT * FROM product";
    $fire = mysqli_query($conn,$product);
    while($fetch = mysqli_fetch_assoc($fire)){
    ?> 
    <div class="col-lg-3 text-center feature-hover">
      <div class="card  border-0 bg-light mb-2">
        <div class="features-body">
          <img src="admin/product_images/<?php echo $fetch['image']; ?>" class="img-fluid" alt="">
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
      <h6><?php echo $fetch['name']; ?></h6>
      <P><?php echo $fetch['price']; ?></P>
    </div>
    <?php 
    }
    ?> 