<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
        header('location: ./index.php');
    }

    require_once '../classes/services.class.php';
    require_once '../classes/vets.class.php';
    require_once '../classes/client.class.php';
    require_once '../classes/appointments.class.php';
    require_once '../tools/functions.php';
    require_once '../classes/database.php';

    
    $services = new Services();
    $servicesArray = $services->show();
    
    $vets = new Vets();
    $vetsArray = $vets->show();

  

  if(isset($_POST['save'])){
        $appt = new Appointment(); 
        
        $appt->user_id = $_SESSION['user_id'];
        $appt->service_id = htmlentities($_POST['service_id']);
        $appt->vetID = htmlentities($_POST['vetID']);
        $appt->time = htmlentities($_POST['time']);
        $appt->date = htmlentities($_POST['date']);
        
        //validate inputs of the users
        if (
        validate_field($appt->service_id) && 
        validate_field($appt->vetID) &&
        validate_field($appt->time) &&
        validate_field($appt->date)){
            //proceed with saving
            if($appt->add()){ 
                header('location: book.php');
                $message = 'You successfully added an appointment';
            }else{
              echo 'An error occured while trying to save your booking';
            }
        }
        var_dump($appt);
    }
  
?>

<!DOCTYPE html>
<html lang="en">
    
<?php
    $title = 'Add Appointment';
    $appointment_page = 'active';
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
                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                        <h2 class="h3 brand-color pt-3 pb-2">Add Appointment</h2>
                        <a href="appointments.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">
                            
                            <div class="mb-3">
                                <select class="form-select form-select-md book-service py-2" name="service_id">
                                    <option  name="service_id" id="service_id" value="<?php if(isset($_POST['service_id'])){echo $_POST['service_id'];} ?>" disabled selected>Select a service</option>
                                    <?php
                                    if ($servicesArray) {
                                        foreach ($servicesArray as $service) {
                                            echo "<option value='{$service['service_id']}'>{$service['service_name']}</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <?php
                                if(isset($_POST['service_id']) && !validate_field($_POST['service_id'])){
                                    ?>
                                        <div class="invalid-feedback d-block">
                                        Please choose a valid service.
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="mb-3">
                                <select class="form-select form-select-md book-service py-2" name="vetID">
                                    <option name="vetID" id="vetID" value="<?php if(isset($_POST['vetID'])){echo $_POST['vetID'];} ?>" disabled selected>Select a vet</option>
                                    <?php
                                    if ($vetsArray) {
                                        foreach ($vetsArray as $vets) {
                                            echo "<option value='{$vets['vetID']}'>{$vets['vetName']}</option>";
                                        }
                                    }
                                ?>
                                </select>
                            
                                <?php
                                    if(isset($_POST['vetID']) && !validate_field($_POST['vetID'])){
                                    ?>
                                        <div class="invalid-feedback d-block">
                                        Please choose a valid service.
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="mb-3">
                                <label for="date">Appointment Date</label>
                                <input type="date" class="form-control" name="date" id="date" value="<?php if(isset($_POST['date'])){echo $_POST['date'];} ?>">
                                <?php
                                    if(isset($_POST['date']) && !validate_field($_POST['date'])){
                                    ?>
                                    <div class="invalid-feedback d-block">
                                    Please enter valid date.
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>

                            <div class="mb-3">
                                <label for="time">Appointment Time</label>
                                <input type="time" class="form-control" name="time" id="time" value="<?php if(isset($_POST['time'])){echo $_POST['time'];} ?>" >
                                <?php
                                    if(isset($_POST['time']) && !validate_field($_POST['time'])){
                                    ?>
                                    <div class="invalid-feedback d-block">
                                    Please enter valid time.
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </div>
                            <button type="submit" name="save" class="btn mt-2 mb-3 brand-bg-color">Save Appointment</button>
                        </form>
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