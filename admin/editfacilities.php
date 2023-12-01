<?php
    
    require_once '../classes/facilities.class.php';
    require_once  '../tools/functions.php';

<<<<<<< HEAD
    //resume session here to fetch session values
    // session_start();
    // /*
    //     if user is not login then redirect to login page,
    //     this is to prevent users from accessing pages that requires
    //     authentication such as the dashboard
    // */
    // if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
    //     header('location: ./index.php');
    // }
=======
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: ./index.php');
    }
>>>>>>> 7aa4575a5175f6c710b14c7eca9d99c73486843e

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
                        <h2 class="h3 brand-color pt-3 pb-2">Edit Clinic Facility</h2>
                        <a href="facilities.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="facilitiesName" class="form-label">Facility Name</label>
                                <input type="text" class="form-control" id="facilitiesName" name="facilitiesName" required value="<?php if(isset($_POST['facilitiesName'])) { echo $_POST['facilitiesName']; } else if(isset($facilities->facilitiesName)){ echo $facilities->facilitiesName; } ?>">
                                <?php
                                    if(isset($_POST['facilitiesName']) && !validate_field($_POST['facilitiesName'])){
                                ?>
                                        <p class="text-danger my-1">Facility name is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description" required value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } else if(isset($description->description)){ echo $description->description; } ?>">
                                <?php
                                    if(isset($_POST['description']) && !validate_field($_POST['description'])){
                                ?>
                                        <p class="text-danger my-1">Description is required</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <!-- <div class="form-group mb-2">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="">Select Category</option>
                                    <option value="Pizza" <?php if(isset($_POST['category']) && $_POST['category'] == 'Pizza') { echo 'selected'; } else if(isset($product->category) && $product->category == 'Pizza'){ echo 'selected'; } ?>>Pizza</option>
                                    <option value="Drinks" <?php if(isset($_POST['category']) && $_POST['category'] == 'Drinks') { echo 'selected'; } else if(isset($product->category) && $product->category == 'Drinks'){ echo 'selected'; } ?>>Drinks</option>
                                    <option value="Hamburger" <?php if(isset($_POST['category']) && $_POST['category'] == 'Hamburger') { echo 'selected'; } else if(isset($product->category) && $product->category == 'Hamburger'){ echo 'selected'; } ?>>Hamburger</option>
                                </select>
                                <?php
                                    if(isset($_POST['category']) && !validate_field($_POST['category'])){
                                ?>
                                        <p class="text-danger my-1">Select product category</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" step="any" class="form-control" id="price" name="price" required value="<?php if(isset($_POST['price'])) { echo $_POST['price']; } else if(isset($product->price)){ echo $product->price; } ?>">
                                <?php
                                    if(isset($_POST['price']) && !validate_field($_POST['price'])){
                                ?>
                                        <p class="text-danger my-1">Price is required</p>
                                <?php
                                    }
                                ?>
                            </div> -->
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
                                <!-- <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="inStock" name="availability" value="In Stock" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'In Stock') { echo 'checked'; } else if(isset($product->availability) && $product->availability == 'In Stock'){ echo 'checked'; } ?>>
                                        <label class="form-check-label" for="inStock">In Stock</label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input type="radio" class="form-check-input" id="outStock" name="availability" value="Out of Stock" <?php if(isset($_POST['availability']) && $_POST['availability'] == 'Out of Stock') { echo 'checked'; } else if(isset($product->availability) && $product->availability == 'Out of Stock'){ echo 'checked'; } ?>>
                                        <label class="form-check-label" for="outStock">Out of Stock</label>
                                    </div>
                                </div> -->
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