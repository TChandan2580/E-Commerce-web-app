<?php include 'header.php'; ?>

<body>
  <div class="col-md-6 bg-light registrationfrom ">
    <div class="card-body  text-black">
      <h3 class="mb-1 text-uppercase text-center">Registration Here</h3>

      <div class="row">
        <form action="registrationcheck.php" method="post">
          <div class="col-md-6">
            <div class="form-outline">
              <input type="text " required="required" name="fname" id="form" class="form-control form-control-lg" />
              <label class="form-label" for="form3">First name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-outline">
              <input type="text" required="required" name="lname" id="form3" class="form-control form-control-lg" />
              <label class="form-label" for="form3">Last name</label>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6 ">
          <div class="form-outline">
            <input type="email" required="required" name="email" id="form3" class="form-control form-control-lg" />
            <label class="form-label" for="form3">Email</label>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="form-outline">
            <input type="text" required="required" name="mobile" id="form3" class="form-control form-control-lg" />
            <label class="form-label" for="form3">Mobile No.</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="form-outline">
            <input type="test" required="required" name="password" id="form3" class="form-control form-control-lg" />
            <label class="form-label" for="form3">Password</label>
          </div>
        </div>
      </div>


      <div class="d-md-flex justify-content-start align-items-center mb-2 py-1">

        <h6 class="mb-0 me-1">Gender: </h6>

        <div class="form-check form-check-inline mb-0 me-2">
          <input class="form-check-input" type="radio" required="required" value="female" name="gender" id="femaleGender" value="option1" />
          <label class="form-check-label" for="femaleGender">Female</label>
        </div>

        <div class="form-check form-check-inline mb-0 me-2">
          <input class="form-check-input" type="radio" required="required" value="male" name="gender" id="maleGender" value="option2" />
          <label class="form-check-label" for="maleGender">Male</label>
        </div>

        <div class="form-check form-check-inline ">
          <input class="form-check-input" type="radio" required="required" value="other" name="gender" id="otherGender" value="option3" />
          <label class="form-check-label" for="otherGender">Other</label>
        </div>

      </div>


      <div class="form-outline ">
        <input type="text"  required="required" id="form3" name="address" class="form-control form-control-lg" />
        <label class="form-label" for="form3">Address</label>
      </div>

      <div class="form-outline ">
        <input type="text" required="required" id="form3" name="pincode" class="form-control form-control-lg" />
        <label class="form-label" for="form3">Pincode</label>
      </div>

      <div class="row">
        <div class="col-md-6 ">

          <select class="select" name="state">
            <option value="1">State</option>
            <option value="2">Option 1</option>
            <option value="3">Option 2</option>
            <option value="4">Option 3</option>
          </select>

        </div>
        <div class="col-md-6 ">

          <select class="select" name="city">
            <option value="1">City</option>
            <option value="2">Option 1</option>
            <option value="3">Option 2</option>
            <option value="4">Option 3</option>
          </select>

        </div>
      </div>


      <div class="d-flex justify-content-end ">
        <button type="submit"  name="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
      </div>
      </form>
    </div>

  </div>

  
  </section>
</body>
  <?php 'footer.php'; ?>