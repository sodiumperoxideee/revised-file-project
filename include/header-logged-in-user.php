<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid">
          <a href='/'><img src="../img/logo.png" class="logo mx-3 me-1" href="index.php"></a>
        <button class="navbar-toggler  ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="nav-link <?= $homepage ?>" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle <?= $book_page ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Appointment
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../user/book.php">Book Pet Care</a></li>
                <li><a class="dropdown-item" href="../user/emergency-care.php">Emergency Care</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle <?= $aboutus_page ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../user/services dog pet care.php">Services</a></li>
                <li><a class="dropdown-item" href="../user/veterinarians.php">Veterinarians</a></li>
                <li><a class="dropdown-item" href="../user/clinic-facilities.php">Clinic Facilities</a></li>
              </ul> 
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 mx-2 me-5">
            <li class="nav-item dropdown mx-3 me-3">
              <a class="nav-link dropdown-toggle <?= $account_page ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../user/user settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="../user/account history.php">Account History</a></li>
                <li><a class="dropdown-item" href="../user/user.logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>