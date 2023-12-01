<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $dashboard_page ?>" aria-current="page" href="dashboard.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $appointment_page ?>" href="#">
                    <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                    Appointments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $users_page ?>" href="products.php">
                <i class="fa-solid fa-user-doctor"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $vets_page ?>" href="#">
                <i class="fa-solid fa-stethoscope"></i>
                    Vets
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $services_page ?>" href="staff.php">
                <i class="fa-solid fa-suitcase-medical"></i>
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $facilities_page ?>" href="staff2.php">
                <i class="fa-solid fa-house-medical"></i>
                    Clinic Facilities
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link <?= $settings_page ?>" href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Settings
                </a>
            </li> -->
            <hr class="d-lg-none">
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="#">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>