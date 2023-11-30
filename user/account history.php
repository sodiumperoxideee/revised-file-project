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
    <title>Account History - View Your Pet's Medical Records</title>
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
    <h2>Account History</h2>
    <p>View your past bookings if applicable.</p>
  </div>

  <div class="acc-history-container my-5 mx-5 px-5 py-3">
    <table class="table">
      <thead>
          <tr>
              <th>Date and Time</th>
              <th>Service Type</th>
              <th>Status</th>
              <th>Vet</th>
              <th>Pet Health Record</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>2023-10-15 10:30 AM</td>
              <td>Checkup</td>
              <td>Upcoming</td>
              <td>Dr. Smith</td>
              <td>No File</td>
          </tr>
          <tr>
              <td>2023-09-25 03:15 PM</td>
              <td>Vaccination</td>
              <td>Completed</td>
              <td>Dr. Johnson</td>
              <td><a href="link_to_pet_health_record1.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <tr>
              <td>2023-08-12 11:45 AM</td>
              <td>Surgery</td>
              <td>Completed</td>
              <td>Dr. Martinez</td>
              <td><a href="link_to_pet_health_record2.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <tr>
              <td>2023-07-05 02:00 PM</td>
              <td>Grooming</td>
              <td>Completed</td>
              <td>Dr. Lee</td>
              <td><a href="link_to_pet_health_record3.pdf" target="_blank"><img src="file-icon.png" alt="Pet Health Record" class="file-icon"></a></td>
          </tr>
          <!-- Add more rows as needed -->
      </tbody>
  </table>
</div>

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