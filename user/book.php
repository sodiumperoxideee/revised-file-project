
<?php
  
    session_start();
    if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user'] != 'client')){
    session_destroy();
    header('location: login.php');
    } else{
    include '../include/header-logged-in-user.php';
    
    }

    $title = 'Book - Schedule an appointment at Purrpaws';
    $book_page = 'active';
    require_once('../include/head.php');
    require_once '../classes/services.class.php';
    require_once '../classes/vets.class.php';
    require_once '../classes/client.class.php';
    require_once '../classes/appointments.class.php';
    require_once '../tools/functions.php';
    require_once '../classes/database.php';

    
    // $database = new Database();
    // $pdo = $database->connect();

    // if (!$pdo) {
    //     die("Database connection error");
    // }

    // $sql = "SELECT appointments.*, CONCAT(user.firstname, ' ', user.lastname) AS user_name, services.service_name, vets.vetName
    //     FROM appointments
    //     JOIN user ON appointments.user_id = user.user_id
    //     JOIN services ON appointments.service_id = services.service_id
    //     JOIN vets ON appointments.vetID = vets.vetID";

    // $result = $pdo->query($sql);    


    $client = new Client();
    $clientArray = $client->show();
    
    $services = new Services();
    $servicesArray = $services->show();
    
    $vets = new Vets();
    $vetsArray = $vets->show();

    
    if(isset($_POST['submit'])){
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
                $message = 'You successfully booked an appointment!';
            }else{
              echo 'An error occured while trying to save your booking request';
            }
        }
        var_dump($appt);
    }
  
?>
<!DOCTYPE html>
<html lang="en">
    

<body>
    <main>
        <div class="booking-title">
            <div class="booking-title-text text-white">
                <h1>Pet Care Booking</h1>
                <p class="mx-auto">Quality Care at Your Fingertips – Book Now</p>
            </div>        
        </div>

        <!-- <div class="facilities d-flex justify-content-center text-center pb-3">
            <h1>Services</h1>
        </div> -->

        <form class="booking-body my-5" method="post" action="">
                <div class="booking-container mb-2 px-5 pb-5">
                    <div class="book-services-title my-5 mb-2">
                        <h4>Choose from any of our services</h4>
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>">

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
                    <a href="services dog pet care.php" class="learn-more">Learn More</a>
                        
                    
                    <h4>Choose a Purrpaws Clinic Veterinarian</h4>
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
                    <a href="veterinarians.php" class="learn-more">Learn More</a>
                    

                    <h4>Choose a schedule</h4>
                    <div class="form-group py-3 me-auto">
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
                    <div class="form-group py-3 me-auto">
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


                    <input name="submit" class="btn px-5 py-2 my-3" type="submit" value="Submit Appointment" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                
                </div>
              
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Request for appointment has been successful</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Thank you for choosing Purrpaws. Your confirmation details will be sent via email.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="account history.php" class="text-decoration-none" style="color: white;">View Activity</button>
                        </div>
                    </div>
                    </div>
                </div>
        </form>
    </main>
</body>
    <?php
        require_once '../include/user-footer.php';
        require_once '../include/js.php';
    ?>
</html>