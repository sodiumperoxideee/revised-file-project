<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Home - Welcome to Purrpaws Veterinary Clinic';
    require_once 'include/head.php';
?>
<body>                                                     
  <?php
    require_once 'include/header-user.php';
  ?>

  <main>
    <div class="section-0">
        <div class="home-headings">
            <h1>Purrpaws Cares with a Clear Purpose</h1>
            <h5 style="text-align: center;" class="mt-1 mb-3">Here at Purrpaws Veterinary Clinic, we have compassionate care and expertise come together to fulfill every cat and dog's purposeful health journey.</h5> 
        </div>
        <div class="homeBtns mt-5">
            <div class="homeBtn">
                <a class="btn mx-2 px-3 py-2" href="book.php" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Book an Appointment</a>
            </div>
            <div class="homeBtn">
                <a class="emergencyBtn btn mx-2 px-3 py-2" href="emergency-care.php" role="button">Emergency Care</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="index-login mx-5">
              <h1 class="text-center" style="font-size: 1.5em;">Login to your account</h1>
              <div class="login-container mx-3">
                <form action="home.php" method="get" class="login-user">
                  <div class="my-2">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                  </div>
                  <div class="my-2">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                  </div>
                  <div class="form-check my-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                      Remember me? 
                      <a href="forgot password.php" class="forgotpass ms-5">Forgot password?</a>
                    </label>
                  </div>
                  
                  <input class="btn px-3 py-2 mt-4" type="submit" value="Login">
                  <p class="my-4 text-center">or with</p>
                  <div class="fb-google d-flex justify-content-center mx-5 ">
                    <a href=""><i class="fa-brands fa-facebook mx-2" style="font-size: 1.5em;"></i></a>
                    <a href=""><i class="fa-brands fa-google mx-2" style="font-size: 1.5em;"></i></a>
                  </div>
                  <p class="alr text-center ">Don't have an account yet? <a href="signup.php" class="text-decoration-none">Sign Up</a></p> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="home-space">
      <h1>Cat and dog parents can visit Purrpaws</h1>
      <p>You can locate us at Cabato Building, San Jose Road, Corner Alejo Alvarez St, Zamboanga 7000, Zamboanga del Sur.</p>
        <div class="homeBtn">
          <a class="btn mt-3 mx-2 px-3 py-2" href="contact.php" role="button">Learn More</a>
        </div>
    </div>
    
    <div class="home-third mx-5">
      <div class="row my-5">
        <div class="col px-3 d-flex justify-content-center">
          <a href="services dog emergency care.php" class="home-services-link">
            <div class="home-col-container py-5">
              <i class="home-col-icon fa-solid fa-truck-medical px-3 py-3 mb-4"></i>
              <h4>Emergency Care Services</h4>
              <p class="mx-5 my-3">We are on the go and we are just one click away from assisting you on a call and coming to your cat or dog's rescue.</p>
            </div>
          </a>
        </div>
        <div class="col px-3 d-flex justify-content-center">
          <a href="services dog pet care.php" class="home-services-link">
            <div class="home-col-container py-5">
              <i class="home-col-icon fa-solid fa-handshake-angle px-3 py-3 mb-4"></i>
              <h4>Comprehensive Services</h4>
              <p class="mx-5 my-3">We are on the go and we are just one click away from assisting you on a call and coming to your cat or dog's rescue.</p>
            </div>
          </a>
        </div>
        <div class="col px-3 d-flex justify-content-center">
          <a href="services cat pet care.php" class="home-services-link">
            <div class="home-col-container py-5">
              <i class="home-col-icon fa-solid fa-shield-cat px-3 py-3 mb-4"></i>
              <h4>Pet Care Services</h4>
              <p class="mx-5 my-3">We are on the go and we are just one click away from assisting you on a call and coming to your cat or dog's rescue.</p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="home-vets-container flex-column mx-5">
      <h1 class="mx-5 text-center">Our Veterinarians are compassionate professionals</h1>
      <p class="my-5 text-center">Purrpaws Vets dedicate their lives to the well-being of animals. They possess a unique blend of medical expertise, empathy, and a genuine love for animals. Their commitment to providing the best care possible is unwavering, as they work tirelessly to diagnose, treat, and prevent illnesses and injuries in our beloved pets and animals.</p>
    
      <div class="homeBtn">
        <a class="btn home-vets px-3 py-2" href="veterinarians.php" role="button">Learn More</a>
      </div>
    </div>

    <div class="section-2 mx-5 mb-5 px-5">
      <div class="row">
        <h1 class="">Our Clinic Facilities</h1>
        <p class="section-2-p px-4 my-2 mt-3 text-center">Purrpaws Vet Clinic is a dedicated sanctuary for your furry friends. We understand that pets are cherished family members, and their well-being is our top priority. We pride ourselves on providing a holistic approach to pet healthcare, offering a wide range of services designed to ensure your pets' health, happiness, and longevity.
        </p>
        <div class="homeBtn mt-4">
          <a class="btn mx-2 px-5 py-2" href="clinic-facilities.php" role="button">View Facilities</a>
        </div>
      </div>
    </div>
  </main>
  <?php
    require_once('include/user-footer.php')
  ?>
</body>
<script src="script.js"></script>
</html>