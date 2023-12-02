<?php
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Appointments';
    $appointments_page = 'active';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Appointments</h2>
                    <div class="table-responsive overflow-hidden">
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Appointment" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                <a href="addappointments.php" class="btn brand-bg-color ms-2">Add Appointment</a>
                            </div>
                        </div>
                    </div>
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
