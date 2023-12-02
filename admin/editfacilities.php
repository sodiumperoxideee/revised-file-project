<?php
    
    require_once '../classes/facilities.class.php';
    require_once  '../tools/functions.php';

    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }

    if(isset($_GET['facilitiesID'])){
        $facilities = new Facilities();
        $record = $facilities->fetch($_GET['facilitiesID']);
        $facilities->facilitiesName = $record['facilitiesName'];
        $facilities->description = $record['description'];
        $facilities->availability = $record['availability'];
    }
    
    if(isset($_POST['save'])){

        $facilities = new Facilities();
        //sanitize
        $facilities->facilitiesID = $_GET['facilitiesID'];
        $facilities->facilitiesName = htmlentities($_POST['facilitiesName']);
        $facilities->description = htmlentities($_POST['description']);
        if(isset($_POST['availability'])){
            $facilities->availability = htmlentities($_POST['availability']);
        }else{
            $facilities->availability = '';
        }

        //validate
        if (validate_field($facilities->facilitiesName) &&
        validate_field($facilities->description) &&
        validate_field($facilities->availability)){
            if($facilities->edit()){
                header('location: facilities.php');
            }else{
                echo 'An error occured while adding in the database.';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Edit Clinic Facilities';
    $facilities_page = 'active';
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
                        <h2 class="h3 brand-color pt-3 pb-2">Edit Clinic Facility</h2>
                        <a href="facilities.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="facilitiesName" class="form-label">Facility Name</label>
                                <input type="text" class="form-control" id="facilitiesName" name="facilitiesName" value="<?php if(isset($_POST['facilitiesName'])) { echo $_POST['facilitiesName']; } else if(isset($facilities->facilitiesName)){ echo $facilities->facilitiesName; } ?>">
                                <?php
                                    if(isset($_POST['facilitiesName']) && !validate_field($_POST['facilitiesName'])){
                                ?>
                                        <p class="text-danger my-1">Please enter a valid facility name</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" maxlength = "255" class="form-control" id="description" name="description" value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } else if(isset($facilities->description)){ echo $facilities->description; } ?>">
                                <?php
                                    if(isset($_POST['description']) && !validate_field($_POST['description'])){
                                ?>
                                        <p class="text-danger my-1">Please enter a valid description</p>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <div class="form-group mb-2">
                                <label class="form-label">Availability</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="available" name="availability" value="Available" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Available') { echo 'checked'; } else if(isset($facilities->availability) && $facilities->availability == 'Available'){ echo 'checked'; } ?>>
                                        <label class="form-check-label" for="available">Available</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="outOrder" name="availability" value="Out of Order" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Out of Order') { echo 'checked'; } else if(isset($facilities->availability) && $facilities->availability == 'Out of Order'){ echo 'checked'; } ?>>
                                        <label class="form-check-label" for="outOrder">Out of Order</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="underCons" name="availability" value="Under Construction" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Under Construction') { echo 'checked'; } else if(isset($facilities->availability) && $facilities->availability == 'Under Construction'){ echo 'checked'; } ?>>
                                        <label class="form-check-label" for="underCons">Under Construction</label>
                                    </div>
                                </div>
                                <?php
                                    if((!isset($_POST['availability']) && isset($_POST['save'])) || (isset($_POST['availability']) && !validate_field($_POST['availability']))){
                                ?>
                                        <p class="text-danger my-1">Select availability status</p>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color">Save Facility</button>
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