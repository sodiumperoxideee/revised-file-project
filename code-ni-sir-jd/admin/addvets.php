<?php
    
    require_once '../classes/vets.class.php';
    require_once  '../tools/functions.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
        header('location: ./index.php');
    }
    
    //if the above code is false then html below will be displayed

    if(isset($_POST['save'])){

        $vets = new Vets();
        //sanitize
        $vets->vetName = htmlentities($_POST['vetName']);
        $vets->email = htmlentities($_POST['email']);
        $vets->almaMater = htmlentities($_POST['almaMater']);
        $vets->degree = htmlentities($_POST['degree']);

        //validate
        if (validate_field($vets->vetName) &&
        validate_field($vets->email) &&
        validate_field($vets->almaMater) &&
        validate_field($vets->degree)){
            if($vets->add()){
                header('location: vets.php');
            }else{
                echo 'An error occured while adding in the database.';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Add Veterinarian';
    $vets_page = 'active';
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
                        <h2 class="h3 brand-color pt-3 pb-2">Add Veterinarian</h2>
                        <a href="vets.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                    <form method="post" action="">
                            <div class="mb-2">
                                <label for="vetName" class="form-label">Veterinarian Name</label>
                                <input type="text" class="form-control" id="vetName" name="vetName" required value="<?php if(isset($_POST['vetName'])) { echo $_POST['vetName']; } else if(isset($vets->vetName)){ echo $vets->vetName; } ?>">
                                <?php
                                    if(isset($_POST['vetName']) && !validate_field($_POST['vetName'])){
                                ?>
                                        <p class="text-danger my-1">Veterinarian name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } else if(isset($vets->email)){ echo $vets->email; } ?>">
                                <?php
                                    if(isset($_POST['email']) && !validate_field($_POST['email'])){
                                ?>
                                        <p class="text-danger my-1">Email is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="almaMater" class="form-label">Alma Mater</label>
                                <input type="text" class="form-control" id="almaMater" name="almaMater" required value="<?php if(isset($_POST['almaMater'])) { echo $_POST['almaMater']; } else if(isset($vets->almaMater)){ echo $vets->almaMater; } ?>">
                                <?php
                                    if(isset($_POST['almaMater']) && !validate_field($_POST['almaMater'])){
                                ?>
                                        <p class="text-danger my-1">Alma Mater is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="degree" class="form-label">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree" required value="<?php if(isset($_POST['degree'])) { echo $_POST['degree']; } else if(isset($vets->degree)){ echo $vets->degree; } ?>">
                                <?php
                                    if(isset($_POST['degree']) && !validate_field($_POST['degree'])){
                                ?>
                                        <p class="text-danger my-1">Degree is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <!-- <div class="mb-2">
                                <label for="discounted_price" class="form-label">Discounted Price</label>
                                <input type="number" step="any" min="0" class="form-control" id="discounted_price" name="discounted_price" required value="<?php if(isset($_POST['discounted_price'])) { echo $_POST['discounted_price']; } else if(isset($voucher->discounted_price)){ echo $voucher->discounted_price; } ?>">
                                <?php
                                    if(isset($_POST['discounted_price']) && !validate_field($_POST['discounted_price'])){
                                ?>
                                        <p class="text-danger my-1">Discounted price is required</p>
                                <?php
                                    }
                                ?>
                            </div> -->
                            <!-- <div class="form-group mb-2">
                                <label for="minimum_purchase" class="form-label">Minimum Purchase</label>
                                <input type="number" step="any" min="0" class="form-control" id="minimum_purchase" name="minimum_purchase" required value="<?php if(isset($_POST['minimum_purchase'])) { echo $_POST['minimum_purchase']; } else if(isset($voucher->minimum_purchase)){ echo $voucher->minimum_purchase; } ?>">
                                <?php
                                    if(isset($_POST['minimum_purchase']) && !validate_field($_POST['minimum_purchase'])){
                                ?>
                                        <p class="text-danger my-1">Minimum purchase is required</p>
                                <?php
                                    }
                                ?>
                            </div> -->
                            <!-- <div class="mb-2">
                                <label for="expiration_datetime" class="form-label">Expiration Date and Time</label>
                                <input type="datetime-local" class="form-control" id="expiration_datetime" name="expiration_datetime" required value="<?php if(isset($_POST['expiration_datetime'])) { echo $_POST['expiration_datetime']; } else if(isset($voucher->expiration_datetime)){ echo $voucher->expiration_datetime; } ?>">
                                <?php
                                    if(isset($_POST['expiration_datetime']) && !validate_field($_POST['expiration_datetime'])){
                                ?>
                                        <p class="text-danger my-1">Expiration date and time is required</p>
                                <?php
                                    }
                                ?>
                            </div> -->
                            <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color">Save Veterinarian</button>
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