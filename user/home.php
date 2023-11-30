<?php
    session_start();

    if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user'] != 'client')){
        header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./vendor/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/custom.css">
    <link href="./vendor/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="./vendor/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="./vendor/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <title>Home - Welcome to Purrpaws Veterinary Clinic</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid">
          <a href='/'><img src="./img/logo.png" class="logo mx-3 me-1" href="index.html"></a>
        <button class="navbar-toggler  ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Appointment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="book.html">Book Pet Care</a></li>
                <li><a class="dropdown-item" href="emergency-care.html">Emergency Care</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="services dog pet care.html">Services</a></li>
                <li><a class="dropdown-item" href="veterinarians.html">Veterinarians</a></li>
                <li><a class="dropdown-item" href="clinic-facilities.html">Clinic Facilities</a></li>
              </ul> 
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 mx-2 me-5">
            <li class="nav-item dropdown mx-3 me-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="user settings.html">Settings</a></li>
                <li><a class="dropdown-item" href="account history.html">Account History</a></li>
                <li><a class="dropdown-item" href="user.logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>

  <div class="section-0">
    <div class="home-headings">
      <h1>Purrpaws Cares with a Clear Purpose</h1>
      <h5 style="text-align: center;" class="mt-1 mb-3">Here at Purrpaws Veterinary Clinic, we have compassionate care and expertise come together to fulfill every cat and dog's purposeful health journey.</h5> 
    </div>
    <div class="homeBtns mt-5">
      <div class="homeBtn">
        <a class="btn mx-2 px-3 py-2" href="book.html" role="button">Book an Appointment</a>
      </div>
      <div class="homeBtn">
        <a class="emergencyBtn btn mx-2 px-3 py-2" href="emergency-care.html" role="button">Emergency Care</a>
      </div>
    </div>
  </div>


  <div class="home-space">
    <h1>Cat and dog parents can visit Purrpaws</h1>
    <p>You can locate us at Cabato Building, San Jose Road, Corner Alejo Alvarez St, Zamboanga 7000, Zamboanga del Sur.</p>
      <div class="homeBtn">
        <a class="btn mt-3 mx-2 px-3 py-2" href="contact.html" role="button">Learn More</a>
      </div>
  </div>
  

  <div class="home-third mx-5">
    <div class="row my-5">
      <div class="col px-3 d-flex justify-content-center">
        <a href="services dog emergency care.html" class="home-services-link">
          <div class="home-col-container py-5">
            <i class="home-col-icon fa-solid fa-truck-medical px-3 py-3 mb-4"></i>
            <h4>Emergency Care Services</h4>
            <p class="mx-5 my-3">We are on the go and we are just one click away from assisting you on a call and coming to your cat or dog's rescue.</p>
          </div>
        </a>
      </div>
      <div class="col px-3 d-flex justify-content-center">
        <a href="services dog pet care.html" class="home-services-link">
          <div class="home-col-container py-5">
            <i class="home-col-icon fa-solid fa-handshake-angle px-3 py-3 mb-4"></i>
            <h4>Comprehensive Services</h4>
            <p class="mx-5 my-3">We are on the go and we are just one click away from assisting you on a call and coming to your cat or dog's rescue.</p>
          </div>
        </a>
      </div>
      <div class="col px-3 d-flex justify-content-center">
        <a href="services cat pet care.html" class="home-services-link">
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
      <a class="btn home-vets px-3 py-2" href="veterinarians.html" role="button">Learn More</a>
    </div>
  </div>
  

  <div class="section-2 mx-5 mb-5 px-5">
    <div class="row">
      <h1 class="">Our Clinic Facilities</h1>
      <p class="section-2-p px-4 my-2 mt-3 text-center">Purrpaws Vet Clinic is a dedicated sanctuary for your furry friends. We understand that pets are cherished family members, and their well-being is our top priority. We pride ourselves on providing a holistic approach to pet healthcare, offering a wide range of services designed to ensure your pets' health, happiness, and longevity.
      </p>
      <div class="homeBtn mt-4">
        <a class="btn mx-2 px-5 py-2" href="clinic-facilities.html" role="button">View Facilities</a>
      </div>
    </div>
  </div>
</body>

<footer class="pt-2">
  <div class="row pt-4">
    <div class="col one mx-5 pe-5">
      <a href="index.html"><h1 class="">Purrpaws</h1></a>
      <h4 class="">A friendly vet clinic that cares for the health and happiness of your cats and dogs.</h4>
      <div class="socmed py-1">
        <a href="#"><i class="fa-brands fa-facebook me-2" style="color: #ff2635;"></i></a>
        <a href="#"><i class="fa-brands fa-instagram me-2" style="color: #ff2635;"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin me-2" style="color: #ff2635;"></i></a>
        <a href="#"><i class="fa-brands fa-youtube me-2" style="color: #ff2635;"></i></a>
      </div>
    </div>
    <div class="col two my-1 mx-5 pe-5">
      <h5>Clinic Information</h5>
      <p class="my-1 ms-2">185 Don Alfaro St, Zamboanga City, Zamboanga del Sur</p>
      <p class="my-1 ms-2">(+63) 927 5150 836</p>
      <p class="my-1 ms-2">purrpawsvetclinic@gmail.com</p>
    </div>
    <div class="col three my-1 mx-5 pe-5"> 
      <h5>Hours of Operation</h5>
      <p class="my-1 ms-2">Tuesday to Friday: 10:00 AM - 7:00 PM</p>
      <p class="my-1 ms-2">Saturday: 9:00 AM - 3:00 PM</p>
      <p class="my-1 ms-2">Sunday and Monday: Closed</p>
    </div>
  </div>
  <div class="uh d-flex justify-content-center">
      <p class="my-3">For after-hour emergencies, please call <a href="tel:+63275150836">+63 927 5150 836</a>.</p>
  </div>
  <div class="col d-flex justify-content-center">
            <p>&copy; 2023 Purrpaws. All rights reserved.</p>
        </div>
</footer>
</html>