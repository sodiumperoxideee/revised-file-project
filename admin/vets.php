<?php
    //resume session here to fetch session values
    session_start();
    // /*
    //     if user is not login then redirect to login page,
    //     this is to prevent users from accessing pages that requires
    //     authentication such as the dashboard
    // */
    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'employee'){
        header('location: ./index.php');
    }
    //if the above code is false then html below will be displayed
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Vets';
    $vets_page = 'active';
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
                    <h2 class="h3 brand-color pt-3 pb-2">Veterinarians</h2>
                    <a href="addvets.php" class="btn btn-primary brand-bg-color mb-3">Add Veterinarians</a>
                    <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                            <div class="input-group">
                                <input type="text" name="keyword" id="keyword" placeholder="Search Veterinarian" class="form-control">
                                <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                            </div>
                            <button class="btn btn-outline-secondary btn-add" type="button" data-bs-toggle="modal" data-bs-target="#addVetsModal"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                        </div>
                    <div id="table-container">
                    <?php
                        require_once '../classes/vets.class.php';
                        require_once '../tools/functions.php';

                        $vets = new Vets();

                        // Fetch staff data (you should modify this to retrieve data from your database)
                        $vetsArray = $vets->show();
                        $counter = 1;
                            
                    ?>
                        <table id="vets" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Vet ID</th>
                                    <th scope="col">Veterinarian Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alma Mater</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="vetsTableBody">
                        <?php
                            if ($vetsArray) {
                                foreach ($vetsArray as $item) {
                        ?>
                                    <tr>
                                        <td><?= $counter ?></td>
                                        <td><?= $item['vetName'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['almaMater'] ?></td>
                                        <td><?= $item['degree'] ?></td>
                                        <td class="text-center"><a href="editvets.php?vetID=<?= $item['vetID'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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