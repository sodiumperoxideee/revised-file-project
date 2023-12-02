

<?php
<<<<<<< HEAD
require_once '../classes/facilities.class.php';
require_once '../tools/functions.php';

$facilities = new Facilities();

// Fetch staff data (you should modify this to retrieve data from your database)
$facilitiesArray = $facilities->show();
$counter = 1;

// Handle search and filter
$searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';
$availability = isset($_GET['staff-status']) ? $_GET['staff-status'] : '';

// Construct the SQL query
$sql = "SELECT * FROM facilities WHERE facilitiesID=$searchKeyword";

if (!empty($searchKeyword)) {
    $sql .= " AND (facilitiesName LIKE '%$searchKeyword%' OR description LIKE '%$searchKeyword%')";
}

=======
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
>>>>>>> 7b5f3cecb741bd6e2419b877b0fb96727c0f745e
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
        require_once('../include/header-admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="title-addbtn d-flex "></div>
                    <h2 class="h3 brand-color pt-3 pb-2">Clinic Facilities</h2>
                    <div class="table-responsive overflow-hidden">
                    <div class="row g-2 mb-2 m-0">
                        <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                        <div class="search-keyword col-12 flex-lg-grow-0 d-flex"> 
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                                <select name="staff-status" id="staff-status" class="form-select me-md-5">
                                    <option value="">All Availability</option>
                                    <option value="Active">Available</option>
                                    <option value="Deactivated">Out of Order</option>
                                    <option value="Deactivated">Under Construction</option>
                                </select>
                            </div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" id="search" placeholder="Search Facility" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" name="submit" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                    <a href="addfacilities.php" class="btn brand-bg-color ms-2">Add Facility</a>
                                </div>
                            </form>
                        </div>
                    </div>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Facility Name</th>
                                    <th scope="col" width="40%">Description</th>
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
                                        <td><?= $item['facilitiesName'] ?></td>
                                        <td><?= $item['description'] ?></td>
                                        <td><?= $item['availability'] ?></td>
                                        <td class="text-center"><a href="editfacilities.php?facilitiesID=<?= $item['facilitiesID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="deletefacilities.php?facilitiesID=<?= $item['facilitiesID'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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