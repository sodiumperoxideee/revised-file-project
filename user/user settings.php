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
    <title>Settings - Customize Your Purrpaws Account</title>
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
                <li><a class="dropdown-item" href="index.html">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  
  
  <div class="settings-title mx-5 px-3 my-4">
    <h2>Account Settings</h2>
    <p>Change your profile and account settings</p>
  </div>

  <div class="container">
    <div class="tab-content" id="profileTabsContent">
      <div class="tab-pane fade show active" id="account">
        <div class="pane-container py-5">

          <h4 class="mb-3">General Info</h4>

          <div class="profile-container mb-4">
            <div class="profile-picture-container">
                <img class="profile-picture" src="./img/HAHAHAHAHAHA.jpg" alt="User Profile Picture">
            </div>
            <label for="profile-picture-upload" class="change-button">Change</label>
            <input type="file" id="profile-picture-upload" accept="image/*">
        </div>

          <form>
            <div class="form-group row">
                <div class="col-sm-12 align-self-center my-2 form-check-inline">
                    <label for="firstname">First Name</label>
                    <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="Enter your first name" value="Sunshine">
                </div>
                <div class="col-sm-12 align-self-center my-2 form-check-inline">
                    <label for="lastname">Last Name</label>
                    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Enter your last name" value="Casido">
                </div>
            </div>
            <div class="col-sm-12 align-self-center mt-2">
                <p class="my-0">Gender:</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                    <label class="form-check-label" for="gender">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" autocomplete="on">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="others">
                    <label class="form-check-label" for="others">Others</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 align-self-center my-2">
                    <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" value="qb202100057@wmsu.edu.ph">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 align-self-center my-2">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" value="cupnoodles">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 align-self-center my-2">
                <label for="phoneno">Phone Number</label>
                <input type="tel" class="form-control" id="email" placeholder="Enter your phone number" value="09275150836">
              </div>
            </div>
<!--             
            <input class="btn px-5 py-2 my-4 d-flex mx-auto" type="submit" value="Save" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->

            <!-- Button trigger modal -->
        
            <!-- Modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn px-5 py-2 my-4 d-flex mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Save
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h5>Changes Successfully Saved</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
          
    </div>
  </div>
  
<script src="script.js"></script>
</body>

<footer class="pt-2 mt-5">
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
    <div class="col three my-1 mx-5"> 
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