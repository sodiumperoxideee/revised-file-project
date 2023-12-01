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
                    <a href="addservices.php" class="btn btn-primary brand-bg-color mb-3">Add Service</a>
                    <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" placeholder="Search Service" class="form-control">
                        </div>
                    </div>
                    <div id="table-container">
                    <?php
                        require_once '../classes/services.class.php';
                        require_once '../tools/functions.php';

                        $services = new Services();

                        // Fetch staff data (you should modify this to retrieve data from your database)
                        $servicesArray = $services->show();
                        $counter = 1;
                            
                    ?>
                        <table id="services" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Service ID</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col" width="40%">Description</th>
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
                                        <td><?= $item['service_id'] ?></td>
                                        <td><?= $item['service_name'] ?></td>
                                        <td><?= $item['description'] ?></td>
                                        <td><?= $item['price'] ?></td>
                                        <td class="text-center"><a href="editservices.php?service_id=<?= $item['service_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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