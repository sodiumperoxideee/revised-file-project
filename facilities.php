<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Clinic Facilities';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Clinic Facilities</h2>
                    <a href="addfacilities.php" class="btn btn-primary brand-bg-color mb-3">Add Clinic Facility</a>
                    <!-- <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Veterinarian" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                            </div>
                            <button class="btn btn-outline-secondary btn-add" type="button" data-bs-toggle="modal" data-bs-target="#addVetsModal"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                    </div> -->
                    <div id="table-container">
                    <?php
                        require_once '../classes/facilities.class.php';
                        require_once '../tools/functions.php';

                        $facilities = new Facilities();

                        // Fetch staff data (you should modify this to retrieve data from your database)
                        $facilitiesArray = $facilities->show();
                        $counter = 1;
                            
                    ?>
                        <table id="facilities" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Facility ID</th>
                                    <th scope="col">Facility Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="facilitiesTableBody">
                        <?php
                            if ($facilitiesArray) {
                                foreach ($facilitiesArray as $item) {
                        ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $item['facilitiesID'] ?></td>
                                        <td><?= $item['facilitiesName'] ?></td>
                                        <td><?= $item['description'] ?></td>
                                        <td><?= $item['availability'] ?></td>
                                        <td class="text-center"><a href="editfacilities.php?facilitiesID=<?= $item['facilitiesID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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