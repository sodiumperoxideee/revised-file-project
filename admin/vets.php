<?php
    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user'] != 'staff'){
        header('location: index.php');
    }
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
                    <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" placeholder="Search Veterinarian" class="form-control">
                            <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                    <a href="addservices.php" class="btn brand-bg-color ms-2">Add Veterinarian</a>
                        </div>
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
                                    <th scope="col">#</th>
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
                                        <td><?= $item['vetID'] ?></td>
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
    require_once '../include/js.php';
    ?>
</body>
</html>