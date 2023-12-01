<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $dashboard_page ?>" aria-current="page" href="../admin/dashboard.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $order_page ?>" href="../admin/appointments.php">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    Appointments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $product_page ?>" href="../admin/users.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $customer_page ?>" href="../admin/vets.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    Vets
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $reports_page ?>" href="../admin/reports.php">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $staff_page ?>" href="../admin/services.php">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $staff_page ?>" href="../admin/facilities.php">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Clinic Facilities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $settings_page ?>" href="../admin/settings.php">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    Settings
                </a>
            </li>
            <hr class="d-lg-none">
            <li class="nav-item d-lg-none">
                <a class="nav-link" href="../admin/admin.logout.php">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>