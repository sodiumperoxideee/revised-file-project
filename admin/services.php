<?php
    // session_start();
    // if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
    //     header('location: ./index.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Services';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Clinic Services</h2>
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Facility" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                <a href="addservices.php" class="btn brand-bg-color ms-2">Add Service</a>
                            </div>
                        </div>
                    <div id="table-container">
                        <?php
                            require_once '../classes/services.class.php';
                            require_once '../tools/functions.php';

                            $services = new Services();

                            $servicesArray = $services->show();
                            $counter = 1;
                                
                        ?>
                        <table id="services" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col" width="50%">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="servicesTableBody">
                                <?php
                                    if ($servicesArray) {
                                        foreach ($servicesArray as $item) {
                                ?>
                                            <tr>
                                                <td><?= $counter ?></td>
                                                <td><?= $item['service_name'] ?></td>
                                                <td><?= $item['description'] ?></td>
                                                <td>₱<?= $item['price'] ?></td>
                                                <td class="text-center"><a href="editservices.php?service_id=<?= $item['service_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a href="deleteservices.php?service_id=<?= $item['service_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                
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