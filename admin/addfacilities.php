<?php
    
    require_once '../classes/facilities.class.php';
    require_once  '../tools/functions.php';

    session_start();
    
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: ./index.php');
    }
    
    if(isset($_POST['save'])){

        $facilities = new Facilities();
        //sanitize
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
            if($facilities->add()){
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
    $title = 'Add Clinic Facilities';
    $facilities_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <?php
        require_once('../include/header.admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                        <h2 class="h3 brand-color pt-3 pb-2">Add Clinic Facility</h2>
                        <a href="facilities.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="facilitiesName" class="form-label">Facility Name</label>
                                <input type="text" class="form-control" id="facilitiesName" name="facilitiesName" required value="<?php if(isset($_POST['facilitiesName'])) { echo $_POST['facilitiesName']; } ?>">
                                <?php
                                    if(isset($_POST['facilitiesName']) && !validate_field($_POST['facilitiesName'])){
                                ?>
                                        <p class="text-danger my-1">Facility Name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <input type="">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" max-length="255" class="form-control" id="description" name="description" required value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } ?>">
                                <?php
                                    if(isset($_POST['description']) && !validate_field($_POST['facilitiesName'])){
                                ?>
                                        <p class="text-danger my-1">Description is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="form-group mb-2">
                                <label class="form-label">Availability</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="available" name="availability" value="In Stock" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'In Stock') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="available">Available</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="outOrder" name="availability" value="In Stock" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'In Stock') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="outOrder">Out of Order</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="underCons" name="availability" value="Out of Stock" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Out of Stock') { echo 'checked'; } ?>>
                                        <label class="form-check-label" for="underCons">Under Construction</label>
                                    </div>
                                </div>
                                <?php
                                    if((!isset($_POST['availability']) && isset($_POST['save'])) || (isset($_POST['availability']) && !validate_field($_POST['availability']))){
                                ?>
                                        <p class="text-danger my-1">Select availability of the facility</p>
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