<?php
    
    require_once '../classes/services.class.php';
    require_once  '../tools/functions.php';

    
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
    
    if(isset($_POST['save'])){

        $services = new Services();
        //sanitize
        $services->service_name = htmlentities($_POST['service_name']);
        $services->description = htmlentities($_POST['description']);
        $services->price = htmlentities($_POST['price']);
        
        //validate
        if (validate_field($services->service_name) &&
        validate_field($services->description) &&
        validate_field($services->price)){
            if($services->add()){
                header('location: services.php');
            }else{
                echo 'An error occured while adding in the database.';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Add Services';
    $services_page = 'active';
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
                        <h2 class="h3 brand-color pt-3 pb-2">Add Service</h2>
                        <a href="services.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form method="post" action="">
                            <div class="mb-2">
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" value="<?php if(isset($_POST['service_name'])) { echo $_POST['service_name']; } ?>">
                                <?php
                                    if(isset($_POST['service_name']) && !validate_field($_POST['service_name'])){
                                ?>
                                        <p class="text-danger my-1">Please enter a valid service name</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" maxlength="255" class="form-control" id="description" name="description" value="<?php if(isset($_POST['description'])) { echo $_POST['description']; } ?>">
                                <?php
                                    if(isset($_POST['description']) && !validate_field($_POST['description'])){
                                ?>
                                        <p class="text-danger my-1">Please enter a valid description</p>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" min="0" step="any" class="form-control" id="price" name="price" value="<?php if(isset($_POST['price'])) { echo $_POST['price']; } ?>">
                                <?php
                                    if(isset($_POST['price']) && !validate_field($_POST['price'])){
                                ?>
                                        <p class="text-danger my-1">Please enter a valid price</p>
                                <?php
                                    }
                                ?>
                            </div>
                            
                            <button type="submit" name="save" class="btn btn-primary mt-2 mb-3 brand-bg-color">Save Service</button>
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