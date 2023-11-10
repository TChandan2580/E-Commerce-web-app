<?php include 'header.php'; ?>

<div class="d-flex my-3 py-4">
    <div class="col-12 contactus_hero_img">
      <img src="./img/blog/details/details-hero.jpg" alt="" height="200px" width="100%" />
      <div class="contactus_hero_heading">
        <h1><b>Contact Us</b></h1>
        <p><b>Home-</b> Contact Us</p>
      </div>
    </div>
  </div>
  <div class="row container mx-auto">
    <div class="col-lg-3 justify-content-center">
      <div class="text-center">
        <div class="mb-2">
          <div class="text-center">
            <i class="fa fa-phone"></i>
          </div>
          <h2><b>PHONE</b></h2>
          <p>+917004711918</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="text-center">
        <div class="mb-2">
          <div class="text-center">
            <i class="fa-solid fa-location-pin"></i>
          </div>
          <h2><b>ADDRESS</b></h2>
          <p>Ahemdabad Gujarat India</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="text-center">
        <div class="  mb-2">
          <div class="text-center">
            <i class="fa-solid fa-clock"></i>
          </div>
          <h2><b> OPEN TIME</b></h2>
          <p>10:00 am to 23:00 pm</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 ">
      <div class="text-center">
        <div class=" mb-2">
          <div class="text-center">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <h2><b>EMAIL</b></h2>
          <p>hello@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d395192.40338237473!2d72.75955113862705!3d23.038220117313678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1677662474797!5m2!1sen!2sin"
      width="1349" height="450" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
  <div>
    <div class="d-flex justify-content-center">
    <form action="contactuscheck.php" method="post">
      <h1>LEAVE MESSAGE</h1>
    </div>
    <div class="d-flex gap-4 justify-content-center mt-lg-4">
      <div class="col-4 g-4">
        <label for="exampleFormControlInput1" class="form-label"> NAME</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="ENTER YOUR FUL NAME" />
      </div>
      <div class="col-4">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="ENTER YOUR MAIL" />
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="col-4">
        <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1"></textarea>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-lg-4 mb-lg-4">
    <button type="submit" name="submit" class="btn btn-primary btn-lg ms-2">send message</button>
    
    </div>
    </form>
  </div>
  
  </div>


<?php 'footer.php'; ?>