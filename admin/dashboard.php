<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Dashboard';
    $dashboard_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <?php
        require_once('../include/header-admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h1 class="h3 brand-color pt-3">Overview</h1>
                    <div class="row py-2 py-lg-3">
                        <!-- Statistic Card 1 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">New Appointments</h5>
                                    <p class="card-text"><i class="fa fa-users"></i> 1,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 1.1 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Pending Confirmations</h5>
                                    <p class="card-text"><i class="fa fa-users"></i> 1,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 2 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Finished Appointments</h5>
                                    <p class="card-text"><i class="fa fa-shopping-cart"></i> 500</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 3 -->
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Services</h5>
                                    <p class="card-text"><i class="fa fa-money" aria-hidden="true"></i> &#8369;10,000</p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistic Card 4 -->
                        <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 pb-2 pb-lg-0">
                            <div class="card admin-rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Products</h5>
                                    <p class="card-text"><i class="fa fa-cubes"></i> 200</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <h2 class="h3 brand-color">New Appointments</h2>
                    <div id="table-container">
                    <?php
                        require_once '../classes/appointments.class.php';
                        require_once '../tools/functions.php';

                        $appt = new Appointment();

                        $apptArray = $appt->show();
                        $counter = 1;
                    ?>
                        <table id="appt" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Appointment ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Service ID</th>
                                    <th scope="col">Vet ID</th>
                                    <th scope="col">Appt. Date</th>
                                    <th scope="col">Appt. Time</th>
                                </tr>
                            </thead>
                            <tbody id="apptTableBody">
                        <?php
                            if ($apptArray) {
                                foreach ($apptArray as $item) {
                        ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $item['appointment_id'] ?></td>
                                        <td><?= $item['user_id'] ?></td>
                                        <td><?= $item['service_id'] ?></td>
                                        <td><?= $item['vetID'] ?></td>
                                        <td><?= $item['date'] ?></td>
                                        <td><?= $item['time'] ?></td>
                                    </tr>
                        <?php
                                    $counter++;
                                }
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <?php
        require_once('../include/js.php')
    ?>
</body>
</html>