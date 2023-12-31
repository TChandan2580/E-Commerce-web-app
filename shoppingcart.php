<?php 
include 'header.php';
$id = $_SESSION['user'];


$totalItemsCost= 0.00;
$totalItemsCount = 0;

?>

<body>
  <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">

              <div class="row">

                <div class="col-lg-7">
                  <h5 class="mb-3"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                  <hr>

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                      <p class="mb-1">Shopping cart</p>
                    </div>
                    <div>
                      <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                  </div>
                  <?php
                  $sql = "SELECT * FROM cart WHERE userid='$id'";
                  $res = mysqli_query($conn,$sql);
                  while($fetch = mysqli_fetch_assoc($res)){
                    $id2 = $fetch['prodid'];
                    $s2 = "SELECT * FROM product WHERE id='$id2'";
                    $r2 = mysqli_query($conn,$s2);
                    $f2 = mysqli_fetch_assoc($r2);
                  ?>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img src="admin/product_images/<?php echo $f2['image']; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5><?php echo $f2['name']; ?></h5>
                            <p class="small mb-0"></p>
                          </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                          <div style="width: 50px;">
                            <h5 class="fw-normal mb-0"><?php echo $fetch['quantity']; ?></h5>
                          </div>
                          <div style="width: 80px;">
                        
                            <h5 class="mb-0"><?php echo $f2['price'] * $fetch['quantity']; ?></h5>
                            <?php 
                             $totalItemsCost = $totalItemsCost + $f2['price'] * $fetch['quantity'];
                             $totalItemsCount = $totalItemsCount + $fetch['quantity'];
                            ?>
                          </div>
                          <a href="delete.php?prodid=<?php echo $fetch['prodid']?>" style=""><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
                <div class="col-lg-5">

                  <div class="card bg-primary text-white rounded-3">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="mb-0">Card details</h5>
                      </div>

                      <form class="mt-4">
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                          <label class="form-label" for="typeName">Cardholder's Name</label>
                        </div>

                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                          <label class="form-label" for="typeText">Card Number</label>
                        </div>
                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                              <label class="form-label" for="typeExp">Expiration</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-outline form-white">
                              <input type="password" id="typeText" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                              <label class="form-label" for="typeText">Cvv</label>
                            </div>
                          </div>
                        </div>

                      </form>

                      <hr class="my-4">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Subtotal</p>
                        <p class="mb-2"><?php echo $totalItemsCost ?></p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Shipping</p>
                        <p class="mb-2">40</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Total</p>
                        <p class="mb-2"><?php echo $totalItemsCost + 40.00 ?></p>
                      </div>

                       <button type="button" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span><?php echo $totalItemsCost + 40.00 ?></span>
                           <span>  Checkout <a href = ThankYou.php?quantity=<?php echo $totalItemsCount?> > <i class="fas fa-long-arrow-alt-right ms-2"></i></a></span>
                        </div>
                      </button> 

                    </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<?php 'footer.php'; ?>


